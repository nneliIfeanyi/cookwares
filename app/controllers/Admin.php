
<?php
class Admin extends Controller {
  public $productModel;
  public $userModel;

  public function __construct(){
      $this->productModel = $this->model('Product');
      $this->userModel = $this->model('User');
  }

   //======================

   public function index(){
    
    redirect('admin/add');
    }
  //======================



  //============
  public function show(){
    $products = $this->productModel->getProducts();
    if (empty($products)) {
      flash('msg', 'You dont have any product yet for sale');
    }
    $data = [
      'title' => 'All Products',
      'products' => $products,
    ];
   
    $this->view('admin/show', $data);
  }


//======================

  public function add(){

     $uploadPath = "uploaded/";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);

      $fileName = basename($_FILES["picture"]["name"]);
      $fileName2 = basename($_FILES["picture2"]["name"]);
      $fileName3 = basename($_FILES["picture3"]["name"]);
      $db_image_file =  $uploadPath . $fileName; 
      $db_image_file2 =  $uploadPath . $fileName2; 
      $db_image_file3 =  $uploadPath . $fileName3;  
      $imageUploadPath = $uploadPath . $fileName; 
      $imageUploadPath2 = $uploadPath . $fileName2;
      $imageUploadPath3 = $uploadPath . $fileName3;
      $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
      $fileType2 = pathinfo($imageUploadPath2, PATHINFO_EXTENSION);
      $fileType3 = pathinfo($imageUploadPath3, PATHINFO_EXTENSION);  
      $data = [
        'category' => $_POST['category'],
        'title' => $_POST['name'],
        'image' => $db_image_file,
        'image2' => $db_image_file2,
        'image3' => $db_image_file3,
      ];  
      // Allow certain file formats 
      $allowTypes = array('jpg','png','jpeg'); 
      if(!in_array($fileType, $allowTypes) || !in_array($fileType2, $allowTypes) || !in_array($fileType3, $allowTypes)){ 
        $data['err'] = 'Pls. Upload product image';
        $this->view('admin/add', $data);
         
          
      }else{ 
          $imageTemp = $_FILES["picture"]["tmp_name"];
          $imageTemp2 = $_FILES["picture2"]["tmp_name"];
          $imageTemp3 = $_FILES["picture3"]["tmp_name"]; 
           
          // Compress size and upload image 
          compressImage($imageTemp, $imageUploadPath, 9);
          compressImage($imageTemp2, $imageUploadPath2, 9);
          compressImage($imageTemp3, $imageUploadPath3, 9); 

          if($this->productModel->add_product($data)){
            flash('success', 'Add Product Successfull');
            redirect('admin/show');
          } else {
            die('Something went wrong');
          } 
            
        }

    }else{
       
        $data = [
          'title' => '',
          'category' => '',
          'title_err' => '',
          'err' => ''
        ]; 

        //Load View
        $this->view('admin/add', $data);
        }
    }
//===============================


    //====================== Edit Product
    public function edit($id){
      $uploadPath = "uploaded/";
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
     
        $fileName = basename($_FILES["picture"]["name"]);
        $fileName2 = basename($_FILES["picture2"]["name"]);
        $fileName3 = basename($_FILES["picture3"]["name"]);
        if (!empty($fileName) || !empty($fileName2) || !empty($fileName3)) {
      
        $db_image_file =  $uploadPath . $fileName; 
        $db_image_file2 =  $uploadPath . $fileName2; 
        $db_image_file3 =  $uploadPath . $fileName3;  
        $imageUploadPath = $uploadPath . $fileName; 
        $imageUploadPath2 = $uploadPath . $fileName2;
        $imageUploadPath3 = $uploadPath . $fileName3;
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
        $fileType2 = pathinfo($imageUploadPath2, PATHINFO_EXTENSION);
        $fileType3 = pathinfo($imageUploadPath3, PATHINFO_EXTENSION);  
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg'); 
        if(!in_array($fileType, $allowTypes) || !in_array($fileType2, $allowTypes) || !in_array($fileType3, $allowTypes)){ 
          
           flash('msg', 'INVALID IMAGE TYPE');
           redirect('admin/edit/$id');
         
          
      }else{ 
          $imageTemp = $_FILES["picture"]["tmp_name"];
          $imageTemp2 = $_FILES["picture2"]["tmp_name"];
          $imageTemp3 = $_FILES["picture3"]["tmp_name"]; 
           
          // Compress size and upload image 
          compressImage($imageTemp, $imageUploadPath, 9);
          compressImage($imageTemp2, $imageUploadPath2, 9);
          compressImage($imageTemp3, $imageUploadPath3, 9); 

        $data = [
          'id' => $id,
          'title' => $_POST['title'],
          'category' => $_POST['category'],
          'image' => $db_image_file,
          'image2' => $db_image_file2,
          'image3' => $db_image_file3
          
        ]; 
  
        if($this->productModel->update($data)){
          
          flash('success', 'Changes made Successfull');
          redirect('admin/show');
        } else {
          die('Something went wrong');
        }
      }
      }else{
          //NO IMAGE EDIT
        $data = [
          'id' => $id,
          'category' => $_POST['category'],
          'title' => $_POST['title']
  
        ]; 
  
        if($this->productModel->update1($data)){
          flash('success', 'Changes made Successfull');
          redirect('admin/show');
        } else {
          die('Something went wrong');


        }

     
        }
        //===========================================================================
       }else {
        // Get post from model
        $products = $this->productModel->getById($id);
        $data = [
          'product' => $products,
           
          ]; 

        $this->view('admin/edit', $data);
      }
}


    //==================== Delete

    public function delete($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Execute
        if($this->productModel->deleteProduct($id)){
          // Redirect to login
          flash('success', 'Product Removed', 'alert alert-danger');
          redirect('admin/show');
          } else {
            die('Something went wrong');
          }
      } else {
        redirect('admin/show');
      }
    }


  
}
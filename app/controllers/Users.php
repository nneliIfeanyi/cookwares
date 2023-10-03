<?php

class Users extends Controller{
    private $userModel;
    public function __construct(){
        $this->userModel = $this->model('User');
      }
      

  

  public function view_p($id){
    $products = $this->userModel->getProductById($id);
    $sellerGoods = $this->userModel->relatedGoods($products->category);
    
    $data = [
      'product' => $products,
      'sellerGoods' => $sellerGoods,
      
    ];
   
    $this->view('users/view_p', $data);
  }

  
  }

<?php
class Product {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function add_product($data){
        $this->db->query('INSERT INTO products (title,description,category,sub_cate,price,img,color,cond_tion,s_id) VALUES(:title,:description,:category,:sub_cate,:price,:img,:color,:condition,:user_id)');
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':category', $data['category']);
         $this->db->bind(':sub_cate', $data['sub_cate']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':img', $data['image']);
        $this->db->bind(':color', $data['color']);
        $this->db->bind(':condition', $data['condition']);
        $this->db->bind(':user_id', $data['user_id']);
        
        if ($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }




    // Update Post
    public function update($data){
      // Prepare Query
      $this->db->query('UPDATE products SET title = :title, description = :des, price = :price, img = :image, img2 = :image2, img3 = :image3, color = :color WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':des', $data['description']);
      $this->db->bind(':price', $data['price']);
      $this->db->bind(':image', $data['image']);
      $this->db->bind(':image2', $data['image2']);
      $this->db->bind(':image3', $data['image3']);
      $this->db->bind(':color', $data['color']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

     // Update without image
    public function update1($data){
      // Prepare Query
      $this->db->query('UPDATE products SET title = :title, description = :des, price = :price, color = :color WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':des', $data['description']);
      $this->db->bind(':price', $data['price']);
      $this->db->bind(':color', $data['color']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function deleteProduct($id){
        // Prepare Query
        $this->db->query('DELETE FROM products WHERE id = :id');
  
        // Bind Values
        $this->db->bind(':id', $id);
        
        //Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }

    // Get All Products
    public function getProducts(){
        $this->db->query("SELECT * FROM products WHERE category = 'kitchen wares' ORDER BY id DESC");
  
        $results = $this->db->resultset();
  
        return $results;
      }

      public function cutleries(){
        $this->db->query("SELECT * FROM products WHERE sub_cate = 'Cutleries' ORDER BY id DESC");

        $results = $this->db->resultset();
  
        return $results;
      }
   
    public function getPots(){
        $this->db->query("SELECT * FROM products WHERE sub_cate = 'Pots' ORDER BY id DESC");
  
        $results = $this->db->resultset();
  
        return $results;
      }

 
    public function getKettles(){
        $this->db->query("SELECT * FROM products WHERE sub_cate = 'Kettles' ORDER BY id DESC");

        $results = $this->db->resultset();
  
        return $results;
      }


      public function getBlenders(){
        $this->db->query("SELECT * FROM products WHERE sub_cate = 'Blenders' ORDER BY id DESC");

        $results = $this->db->resultset();
  
        return $results;
      }




      public function getGas(){
        $this->db->query("SELECT * FROM products WHERE sub_cate = 'Gas cooker' ORDER BY id DESC");

        $results = $this->db->resultset();
  
        return $results;
      }

      public function hotPlates(){
        $this->db->query("SELECT * FROM products WHERE sub_cate = 'Electric Cooker' ORDER BY id DESC");

        $results = $this->db->resultset();
  
        return $results;
      }

      public function microWaves(){
        $this->db->query("SELECT * FROM products WHERE sub_cate = 'Micro waves' ORDER BY id DESC");

        $results = $this->db->resultset();
  
        return $results;
      }

      // Get Product By ID
    public function getById($id){
      $this->db->query("SELECT * FROM products WHERE id = :id");

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }


    }

<?php
class Product {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function add_product($data){
        $this->db->query('INSERT INTO products (title,category,img,img2,img3) VALUES(:title,:category,:img,:img2,:img3)');
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':img', $data['image']);
        $this->db->bind(':img2', $data['image2']);
        $this->db->bind(':img3', $data['image3']);
        
        if ($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }




    // Update Post
    public function update($data){
      // Prepare Query
      $this->db->query('UPDATE products SET title = :title, category = :category, img = :image, img2 = :image2, img3 = :image3 WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':category', $data['category']);
      $this->db->bind(':image', $data['image']);
      $this->db->bind(':image2', $data['image2']);
      $this->db->bind(':image3', $data['image3']);
      
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
      $this->db->query('UPDATE products SET title = :title, category = :category WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':category', $data['category']);
      
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
        $this->db->query("SELECT * FROM products ORDER BY id DESC");
  
        $results = $this->db->resultset();
  
        return $results;
      }

      public function utensils(){
        $this->db->query("SELECT * FROM products WHERE category = 'Utensils' ORDER BY id DESC");

        $results = $this->db->resultset();
  
        return $results;
      }

 
      public function getBlenders(){
        $this->db->query("SELECT * FROM products WHERE category = 'Blenders' ORDER BY id DESC");

        $results = $this->db->resultset();
  
        return $results;
      }




      public function getGas(){
        $this->db->query("SELECT * FROM products WHERE category = 'Gas cooker' ORDER BY id DESC");

        $results = $this->db->resultset();
  
        return $results;
      }

      public function others(){
        $this->db->query("SELECT * FROM products WHERE category = 'others' ORDER BY id DESC");

        $results = $this->db->resultset();
  
        return $results;
      }

      public function microWaves(){
        $this->db->query("SELECT * FROM products WHERE category = 'Micro waves' ORDER BY id DESC");

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

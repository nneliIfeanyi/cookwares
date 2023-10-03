<?php

class User{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

  
      // Get Product By ID
    public function getProductById($id){
      $this->db->query("SELECT * FROM products WHERE id = :id");

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }


    public function relatedGoods($category){
      $this->db->query("SELECT * FROM products WHERE category = :id");
      $this->db->bind(':id', $category);

      $row = $this->db->resultset();

      return $row;
    }

    
}
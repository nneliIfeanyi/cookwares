<?php
  class Pages extends Controller {

    public $productModel;
    public function __construct(){
      $this->productModel = $this->model('Product');
    }
    

    //====INDEX PAGE VIEW DISPLAY
    public function index(){
      if (!empty($products = $this->productModel->getProducts())) {
      
        $data = [
          'err' => '',
          'title' => 'All Categories',
          'description' => '',
          'products' => $products,
        ];

      }else{

       flash('success', 'Your products will appear here');
       $data = [
          'err' => '',
          'title' => 'All Categories',
          'description' => '',
          'products' => $products,
        ];
      }

      $this->view('pages/index', $data);
    }



     //====ABOUT PAGE VIEW DISPLAY
    public function about(){
      $data = [
        'title' => 'Under Construction',
        'description' => 'This view is still under construction.'
      ];

      $this->view('pages/about', $data);
    }


    
  }
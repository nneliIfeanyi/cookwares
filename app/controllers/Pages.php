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



     //====
    public function blenders(){
      $products = $this->productModel->getBlenders();

      $data = [
        'title' => 'Blenders',
        'products' => $products,
      ];

      $this->view('pages/blenders', $data);
    }




    public function utensils(){
      $products = $this->productModel->utensils();

      $data = [
        'title' => 'Utensils',
        'products' => $products,
      ];

      $this->view('pages/utensils', $data);
    }


    public function microwaves(){
      $products = $this->productModel->microWaves();

      $data = [
        'title' => 'MicroWaves',
        'products' => $products,
      ];

      $this->view('pages/microwaves', $data);
    }




    public function gas_cookers(){
      $products = $this->productModel->getGas();

      $data = [
        'title' => 'Gas Burners',
        'products' => $products,
      ];

      $this->view('pages/gas_cookers', $data);
    }


    public function others(){
      $products = $this->productModel->others();

      $data = [
        'title' => 'Other Categories',
        'products' => $products,
      ];

      $this->view('pages/others', $data);
    }


    
  }
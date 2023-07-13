<?php

class Products extends Controller{
    private $userModel;
    private $productModel;

    public function __construct(){
        $this->userModel = $this->model('User');
        $this->productModel = $this->model('Product');
      }



       public function index(){
        $products = $this->productModel->getProducts();
             if (!empty($products)) {
        $data = [
              'title' => 'All Products',
              'products' => $products
            ];
      }else{
         flash('success', 'No results found');
        $data = [
              'title' => 'All Products',
              'products' => $products
            ];
      }

       
        $this->view('products/index', $data);
      }

       public function cutleries(){
        $products = $this->productModel->cutleries();
             if (!empty($products)) {
        $data = [
              'title' => 'Cutleries',
              'products' => $products
            ];
      }else{
         flash('success', 'No results found');
        $data = [
              'title' => 'Cutleries',
              'products' => $products
            ];
      }

       
        $this->view('products/cutleries', $data);
      }



      public function pots(){
        $products = $this->productModel->getPots();
             if (!empty($products)) {
        $data = [
              'title' => 'Non Stick Pots',
              'products' => $products
            ];
      }else{
         flash('success', 'No results found');
        $data = [
              'title' => 'Non Stick Pots',
              'products' => $products
            ];
      }

       
        $this->view('products/pots', $data);
      }



      public function kettles(){
        $products = $this->productModel->getKettles();
             if (!empty($products)) {
        $data = [
              'title' => 'Kettles',
              'products' => $products
            ];
      }else{
         flash('success', 'No results found');
        $data = [
              'title' => 'Kettles',
              'products' => $products
            ];
      }

       
        $this->view('products/kettles', $data);
      }


      public function blenders(){
        $products = $this->productModel->getBlenders();
             if (!empty($products)) {
        $data = [
              'title' => 'Blenders',
              'products' => $products
            ];
      }else{
         flash('success', 'No results found');
        $data = [
              'title' => 'Blenders',
              'products' => $products
            ];
      }

       
        $this->view('products/blenders', $data);
      }



       public function gas_cookers(){
        $products = $this->productModel->getGas();
             if (!empty($products)) {
        $data = [
              'title' => 'Gas Cookers',
              'products' => $products
            ];
      }else{
         flash('success', 'No results found');
        $data = [
              'title' => 'Gas Cookers',
              'products' => $products
            ];
      }

       
        $this->view('products/gas_cookers', $data);
      }

       public function hotplates(){
        $products = $this->productModel->hotPlates();
             if (!empty($products)) {
        $data = [
              'title' => 'Electric Cookers',
              'products' => $products
            ];
      }else{
         flash('success', 'No results found');
        $data = [
              'title' => 'Electric Cookers',
              'products' => $products
            ];
      }

       
        $this->view('products/hotplates', $data);
      }

       public function microwaves(){
        $products = $this->productModel->microWaves();
             if (!empty($products)) {
        $data = [
              'title' => 'Micro Waves',
              'products' => $products
            ];
      }else{
         flash('success', 'No results found');
        $data = [
              'title' => 'Micro Waves',
              'products' => $products
            ];
      }

       
        $this->view('products/microwaves', $data);
      }






}
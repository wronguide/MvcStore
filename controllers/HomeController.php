<?php
namespace controllers;
class HomeController {
     public function index() {
         $homeModel= new \models\HomeModel();
         $products = $homeModel->getProducts();
         $filters = $homeModel->getGenre();
         $banner=$homeModel->getBanner();

         $homeView= new \views\HomeView($products,$filters,$banner);

     }
}
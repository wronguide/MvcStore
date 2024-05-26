<?php

namespace controllers;

class ProductController
{
    function index()
    {
        $productModel=new \models\ProductModel();
        $products = $productModel->getProduct($_GET['id_product']);
        $reviews=$productModel->getReviews($_GET['id_product']);
        $productView=new \views\ProductView($products,$reviews);
    }
}
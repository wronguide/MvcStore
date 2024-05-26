<?php

namespace controllers;

class CatalogController
{
    public function index() {
        $homeModel= new \models\HomeModel();
        $products = $homeModel->getProducts();
        $filters = $homeModel->getGenre();

        $homeView= new \views\CatalogView($products,$filters);

    }
}
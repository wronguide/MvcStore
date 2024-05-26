<?php

namespace controllers;

class FilterController
{
    public function filterProducts() {
        $HomeModel=new \models\HomeModel;

        $products=$HomeModel->getFilteredProducts($_POST['genre'],$_POST['age'],$_POST['player_count'],$_POST['minPrice'],$_POST['maxPrice'],$_POST['search']);
        if (!empty($products)) {
        foreach ($products as $item){
            include 'templates/catalogCard.php';
        }
        }else{
            echo 'Совпадений не найдено';
        }


       // echo json_encode($_POST['genre']);
    }
    public function  clearFilter()
    {
        $HomeModel=new \models\HomeModel;
        $filters=$HomeModel->getGenre();
        include_once './views/filters.php';




    }
}
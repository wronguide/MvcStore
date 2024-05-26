<?php

namespace models;

class ProductModel
{
    protected $connect;
    function __construct(){
        $this->connect= \config\DBConnect::getInstance()->getConnect();
    }
    function getReviews($id_product){

        $query=$this->connect->query("select * from Reviews where IDproduct=$id_product");

        if($query->num_rows) {
            while ($row = $query->fetch_assoc()) {//перебираем все строчки
                $answer[] = $row;//и помещаем их в масссив
            }
        }else{
            $answer="";
        }
        return $answer;
    }
    function getProduct($data){

        $query = $this->connect->query("
            SELECT * 
            FROM Products 
            JOIN Categories ON Products.id_category = Categories.id_category
            WHERE Products.ID = $data
        ");
        if($query->num_rows) {
            while ($row = $query->fetch_assoc()) {//перебираем все строчки
                $answer = $row;//и помещаем их в масссив
            }
        }
        return $answer;
    }
}
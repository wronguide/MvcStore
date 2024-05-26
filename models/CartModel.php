<?php

namespace models;

class CartModel
{
    protected $connect;
    function __construct(){
        $this->connect= \config\DBConnect::getInstance()->getConnect();
    }
    function getProductsCard()
    {
        $query=$this->connect->query("select Cart.id as id, Products.ID as id_product,name,price,image,count, price*count as summ from Cart,Products where  Products.ID=Cart.id_product and id_user=".$_SESSION['auth'] );
        $answer=[];
        if($query->num_rows) {
            while ($row = $query->fetch_assoc()) {//перебираем все строчки
                $answer[] = $row;//и помещаем их в масссив
            }
        }
        return $answer;
    }
    function add_to_cart($id_product,$count)
    {
        $id_user=$_SESSION['auth'];
        $query=$this->connect->query("select * from Cart where id_user=$id_user and id_product=$id_product");

        if($query->num_rows) {
            $this->connect->query("UPDATE Cart SET count = count+$count WHERE id_user=$id_user and id_product=$id_product");

        }else{
            $this->connect->query("INSERT INTO Cart (id_user, id_product, count) VALUES ($id_user, $id_product,$count )");
        }

    }
    function checkCount($idCart)
    {
        $query=$this->connect->query("select count from Cart where id=$idCart");
        return $query->fetch_array()[0];
    }
    function checkCountProduct()
    {
        $id_user=$_SESSION['auth'];
        $query=$this->connect->query("select id from Cart where id_user=$id_user");
        return $query->num_rows;
    }
    function changeByButtons($action,$itemCart)
    {
        if($action=='plus'){
            $this->connect->query("UPDATE Cart SET count = count+1 WHERE id=$itemCart");

        }
        elseif($action=='minus'){
            $this->connect->query("UPDATE Cart SET count = count-1 WHERE id=$itemCart");
            $count=$this->checkCount($itemCart);
            if($count==0){
                $this->connect->query("DELETE FROM Cart WHERE id=$itemCart");
            }
        }else{
            $this->connect->query("UPDATE Cart SET count = $action WHERE id=$itemCart");
            $count=$this->checkCount($itemCart);
            if($count==0){
                $this->connect->query("DELETE FROM Cart WHERE id=$itemCart");
            }
        }

        return $this->checkCount($itemCart);
    }

}
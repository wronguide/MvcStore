<?php

namespace controllers;

use models\CartModel;

class CartController
{
function index()
{
    $cartModel=new \models\CartModel();
    $products= $cartModel->getProductsCard();
    $cartView=new \views\CartView($products);
}

function add_to_cart()
{
    $id_product=$_POST['id_product'];
    $count=$_POST['count'];
    $cartModel=new \models\CartModel();
    $cartModel->add_to_cart($id_product,$count);
}
function changeByButtons()
{
    $action=$_POST['action'];
    $itemCart=$_POST['itemCart'];
    $cartModel=new \models\CartModel();
    echo $cartModel->changeByButtons($action,$itemCart);
}

    function reloadCount()
    {
        $cartModel=new \models\CartModel();
        $countProducts=$cartModel->checkCountProduct();
        $_SESSION['cart']=$countProducts;
        echo json_encode($countProducts);
    }
    function reloadCart()
    {
        $cartModel=new \models\CartModel();
        $products= $cartModel->getProductsCard();
        $cartView=new \views\CartView($products);
    }
}
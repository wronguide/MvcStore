<?php
namespace controllers;
class RegisterController
{
        function register()
        {
            $RegisterModel=new \models\RegisterModel;

            $user=$RegisterModel->get_user($_GET['reg_email'],$_GET['reg_number_phone']);
            if($user==0){
                $RegisterModel->register($_GET['reg_name'],$_GET['reg_surname'],$_GET['reg_email'],$_GET['reg_number_phone'],$_GET['reg_password'],$_GET['reg_photo']);
                $user=$RegisterModel->get_user($_GET['reg_email'],$_GET['reg_number_phone']);
                $_SESSION['auth']=$user['ID'];
                $cartModel=new \models\CartModel();
                $countProducts=$cartModel->checkCountProduct();
                $_SESSION['cart']=$countProducts;
                echo json_encode(1);
            }else{
                echo json_encode(0);
            }
        }
    function login()
    {
        $RegisterModel=new \models\RegisterModel;
        $pass=$RegisterModel->get_pass_by_email( $_GET['reg_email']);

        if (password_verify($_GET['reg_password'], $pass)) {
            $user=$RegisterModel->get_user($_GET['reg_email'],Null);
            $_SESSION['auth']=$user['ID'];
            $cartModel=new \models\CartModel();
            $countProducts=$cartModel->checkCountProduct();
            $_SESSION['cart']=$countProducts;

            echo json_encode(1);

        }else{
            echo json_encode(0);
        }


    }
}
?>


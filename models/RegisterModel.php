<?php

namespace models;

class RegisterModel
{
    protected $connect;
    function __construct(){
        $this->connect= \config\DBConnect::getInstance()->getConnect();
    }
    function get_user($email,$phonenumber)
    {
        $query=$this->connect->query("select * from Customers where email='$email' OR phonenumber='$phonenumber'");
        if($query->num_rows>0){
            $id = $query->fetch_assoc();
            return $id;
        }else{
            return  0;
        }
    }
    function get_pass_by_email($email)
    {
        $query=$this->connect->query("select * from Customers where email='$email'");
        if($query->num_rows>0){
            $pass = $query->fetch_assoc()['password'];
            return $pass;
        }else{
            return  0;
        }
    }
    function get_user_by_id($id){
        $query=$this->connect->query("select * from Customers where ID=$id");
        if($query->num_rows>0){
            $user = $query->fetch_assoc();
            return $user;
        }else{
            return  0;
        }
    }
    function  register($reg_name,$reg_surname,$reg_email,$reg_number_phone,$reg_password,$reg_photo)
    {
        $password=password_hash($reg_password, PASSWORD_DEFAULT);
        $query=$this->connect->query("INSERT INTO Customers (name, surname, email, phonenumber, password, photo) 
        VALUES ('$reg_name', '$reg_surname', '$reg_email', '$reg_number_phone', '$password', '".$reg_photo['name']."')");



    }

}
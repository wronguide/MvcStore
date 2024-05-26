<?php

namespace config;

class DBConnect
{
    private static $instance;
    private static $connect;

    private function __construct()
    {
        self::$connect = mysqli_connect('localhost', 'root', '', 'MyMvcStore') or die("Невозможно установить соединение с базой данных: " . mysqli_connect_error());
        mysqli_query(self::$connect, 'SET names "utf8"');
    }

    public static function getInstance()
    {
        if (self::$instance instanceof self) {
            return self::$instance;
        }
        return self::$instance = new self;
    }

    public function getConnect()
    {
        return self::$connect;
    }

    private function __clone()
    {

    }
}
<?php
function autoload($class_name)
{
    // Заменяет слэши '\' на '/' в имени класса
    $class_name = str_replace('\\', '/', $class_name);

    // Проверяет, существует ли файл с именем класса
    if (file_exists(PATH_SITE . "/" . $class_name . ".php")) {
        // Подключает файл с именем класса
        include_once(PATH_SITE . "/" . $class_name . ".php");
    } else {
        header("HTTP/1.0 404 Not Found");
        // Выводит сообщение о том, что такой страницы не существует
        echo "К сожалению, такой страницы не существует. [" . PATH_SITE ."/". $class_name . ".php ]";
        // Завершает скрипт
        exit;
    }
}
// Регистрирует функцию autoload для автоматической загрузки классов
spl_autoload_register('autoload');
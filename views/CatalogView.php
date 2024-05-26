<?php

namespace views;

class CatalogView
{
    function __construct($products,$filters)
    {
        ?>
        <!doctype html>
        <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <link rel="stylesheet" href="../public/css/slider.css">
            <link rel="stylesheet" href="../public/css/catalogCard.css">
            <link rel="stylesheet" href="../public/css/filters.css">
            <title>Каталог</title>
        </head>
        <body>
        <div class="container">
            <?php

            include "./templates/header.php";
            $this->catalog($products,$filters);
            include "./templates/footer.php";
            ?>
        </div>

        <script src="../public/js/jquery-3.3.1.min.js"></script>

        <script src="../public/js/ui.js"></script>
        <script src="../public/js/homePage.js"></script>
        <script src="../public/js/Filter.js"></script>
        <script src="../public/js/openProduct.js"></script>
        <script src="../public/js/Cart.js"></script>
        </body>
        </html>
        <?php
    }

    function catalog($products,$filters)
    {
        ?>
        <div class="catalog">
        <div class="catalog__fields">
            <input type="button" class="fields__filters-button"  value="ФИЛЬТРЫ" style="cursor: pointer">
            <input type="text" placeholder="Ищу..."  class="fields__search-field">
        </div>
        <div class="catalog__container">
            <div class="filters">
                <?
                include_once 'filters.php';
                ?>
            </div>
            <div class="catalog__cards"><?
                foreach($products as $item) {
                    include 'templates/catalogCard.php';
                }
                ?>
            </div>
        </div>
        <?php
    }
}
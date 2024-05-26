<?php

namespace views;

class HomeView
{
    function __construct($products,$filters,$banner)
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
            <title>Главная страница</title>
        </head>
        <body>
        <div class="container">
        <?php

        include "./templates/header.php";
        $this->banner($banner);
        $this->catalog($products,$filters);
        include "./templates/footer.php";
        ?>
        </div>


        <script src="../public/js/slider.js"></script>
        <script src="../public/js/ui.js"></script>
        <script src="../public/js/homePage.js"></script>
        <script src="../public/js/Filter.js"></script>
        <script src="../public/js/openProduct.js"></script>
        <script src="../public/js/Cart.js"></script>
        </body>
        </html>
        <?php
    }

    function banner($banner)
    {
        ?>
        <div class="box slider">
            <div class="callout-text">
                <div class="testimonial-carousel">

                    <div class="icon-container">
                            <span class="lnr lnr-arrow-left-circle">
                                ᐸ
                            </span>
                    </div>
                    <div class="testimonial-items">
                        <h2 class="carousel-h2" ><span style="font-family:Rubik Doodle Shadow, system-ui">Открой</span> коробку и <br>
                            <span style="font-family:Rubik Doodle Shadow, system-ui">погрузись</span> в мир игр!</h2>
                        <div class="testimonial-item first">
                            <div>
                                <h3><?=$banner[0]['name']?></h3>
                                <p class="quote"><?=$banner[0]['slogan']?></p>
                            </div>
                            <img src="../public/img/homepage/banner/<?=$banner[0]['img_banner']?>" alt="">

                        </div>
                        <div class="testimonial-item second">
                            <div>
                                <h3><?=$banner[1]['name']?></h3>
                                <p class="quote"><?=$banner[1]['slogan']?></p>
                            </div>
                            <img src="../public/img/homepage/banner/<?=$banner[1]['img_banner']?>" alt="">
                        </div>
                        <div class="testimonial-item third">
                            <div>
                                <h3><?=$banner[2]['name']?></h3>
                                <p class="quote"><?=$banner[2]['slogan']?></p>
                            </div>
                            <img src="../public/img/homepage/banner/<?=$banner[2]['img_banner']?>" alt="">
                        </div>
                    </div>
                    <!-- End .testimonial-items -->
                    <div class="icon-container">
                            <span class="lnr lnr-arrow-right-circle">
                                ᐳ
                            </span>
                    </div>
                </div>
            </div>
        </div>

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
<?php
namespace views;
class CartView
{
    function __construct($products)
    {
        ?>
        <!doctype html>
        <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <link rel="stylesheet" href="../public/css/style.css">
            <link rel="stylesheet" href="../public/css/cart.css">
            <title>Каталог</title>
        </head>
        <body>
        <div class="container">
            <?php

            include "./templates/header.php";
            $this->cart($products);
            include "./templates/footer.php";

            ?>
            <script src="../public/js/Cart.js"></script>
        </div>



        </body>
        </html>
        <?php
    }

    function cart($products)
    {
        ?>

        <div class="box cart-box">
            <div class="container">
            <h1 class="cart__title">Корзина</h1>
            <div class="line"></div>
            <div class="cart__head-box">
                <input type="checkbox" class="head-box__all-item">
                <div ></div>
                <p>Название</p>
                <p>Количество</p>
                <p>Стоимость</p>
            </div>
            <div class="line"></div>
            <div class="cart-items">
                <?
                if(count($products)!=0){
                foreach ($products as $product) {
                ?>
                <div class="cart-item" data-id="<?=$product['id']?>" >
                    <input type="checkbox" class="cart-item__all-item">
                    <div class="cart-item__img"><img src="../public/img/catalog/<?=explode(',',$product['image'])[0]?>"  alt=""></div>
                    <div class="cart-item__box-title">
                        <h2 class="cart-item__title"><?=$product['name']?></h2>
                        <p class="cart-item__price">Цена: <span><?=$product['price']?>р</span></p>
                    </div>
                    <div class="cart-item__count-box" data-id="<?=$product['id']?>">
                        <img src="../public/img/minus.png" alt="" class="count-box__minus">
                        <input type="number" class="count-box__count" value="<?=$product['count']?>" pattern="[0-9]*" min="1" maxlength="4" max="351">
                        <img src="../public/img/plus.png" alt="" class="count-box__plus">
                    </div>
                    <p class="count-box__sum"><?=$product['summ']?>р</p>

                </div>
                    <?}

                ?>

            </div>
                <div class="line"></div>
                <p class="cart-items-sum">Итого: <span><?=array_sum(array_column($products, 'summ'))?></span>р</p>
        </div>
        </div>
<?php
    }
else{
        ?>
    <p>Корзина пуста</p>
    <?php
    }
}}
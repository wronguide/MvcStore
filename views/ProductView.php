<?php

namespace views;

class ProductView
{
    function __construct($item, $reviews)
    {
        ?>
        <!doctype html>
        <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <link rel="stylesheet" href="../public/css/product.css">
            <title><?= $item['name'] ?></title>
        </head>
        <body>
        <div class="container">
            <?php

            include "./templates/header.php";
            ?>
            <div class="box product-box">
                <?
                $this->card($item);
                $this->reviews($reviews);
                ?>
            </div>
            <?
            include "./templates/footer.php";
            ?>
        </div>

        <script src="../public/js/jquery-3.3.1.min.js"></script>
        <script src="../public/js/product.js"></script>
        <script src="../public/js/Cart.js"></script>
        </body>
        </html>
        <?php
    }

    function card($item)
    {
        ?>

        <div class="product-box__tags">
            <a href=""><span class="tags__category">#<?= $item['name_category'] ?></span></a>
            <a href=""><span class="tags__age">#<?= $item['age'] ?>+</span></a>
        </div>
        <div class="product-box__card">
            <div class="card__images">
                <div class="images__other">
                    <div><img class="selected" src="/public/img/catalog/<?= explode(',', $item['image'])[0] ?>" alt="">
                    </div>
                    <div><img src="/public/img/catalog/<?= explode(',', $item['image'])[1] ?>" alt=""></div>
                    <div><img src="/public/img/catalog/<?= explode(',', $item['image'])[2] ?>" alt=""></div>
                </div>
                <div class="images__main">
                    <img class="selected" src="/public/img/catalog/<?= explode(',', $item['image'])[0] ?>" alt="">
                </div>

            </div>
            <div class="card__content">
                <div>
                    <div class="card__top">
                        <h3 class="card__title"><?= $item['name'] ?></h3>
                        <?php if ($item['hot']) {
                            echo "<img class='card__hot_icon'  src='../public/img/hot.png' alt=''>";
                        } ?>

                        <p class="card__age"><?= $item['age'] ?>+</p>
                    </div>
                    <div class="card__slogan">
                        <span>«</span>
                        <?= $item['slogan'] ?>
                        <span>»</span>
                    </div>
                    <p class="card__description">
                        <?= $item['description'] ?>
                    </p>
                    <p class="card__players">
                        Для <b><?= $item['countPlayers'] ?></b> игроков
                    </p>
                </div>
                <div>
                    <p class="card__price">
                        <?= $item['price'] ?>р
                    </p>
                    <?php if (isset($_SESSION['auth'])) { ?>
                        <a href="#" class="button" id="add-to-cart" data-id="<?= $item['ID'] ?>">В КОРЗИНУ</a>
                    <?php } ?>
                </div>
            </div>

        </div>
        <div class="product-box__line">
        </div>
        <div class="product-box__comment-box">
        <div class="comment-box__top">
            <h4 class="comment-box__title">
                КОММЕНТАРИИ
            </h4>
            <p class="comment-box__rating-title">Оценка:</p>
            <div class="comment-box__filters-rating">
                <span class="filters-rating__one">Любой</span>
                <div class="filters-rating__line"></div>
                <div class="filters-rating__two">
                    <div class="two__item selected"></div>
                    <div class="two__item selected"></div>
                    <div class="two__item selected"></div>
                    <div class="two__item"></div>
                    <div class="two__item"></div>
                </div>
            </div>
        </div>


        <?php
    }

    function reviews($reviews)
    {
        ?>
        <div class="flex">
            <div class="comment-box__comments">
                <?
                if (!empty($reviews)) {
                    foreach ($reviews as $review) {
                        ?>
                        <div class="comments__comment">
                            <div class="comment__top">
                                <div class="comment__img"><img src="./public/img/users/i-290-3.jpeg" alt=""></div>
                                <div class="comment__right-block">
                                    <p class="comment__name">Иванов Иван</p>
                                    <div class="filters-rating__two">
                                        <div class="two__item selected"></div>
                                        <div class="two__item selected"></div>
                                        <div class="two__item selected"></div>
                                        <div class="two__item"></div>
                                        <div class="two__item"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="comment__text">
                                <?= $review['text'] ?>
                            </p>
                        </div>
                    <?
                    }
                } else {
                    ?>
                    <p>Комментариев нет</p>
                    <?
                }
                ?>

            </div>
            <div class="comment-box__add-comment-box">

                        <textarea name="" id="" cols="30" rows="4" placeholder="Текст.."
                                  class="add-comment-box__input"></textarea>
                <div class="add-comment-box__bottom">
                    <a href="#" class="button">Отправить</a>
                    <p class="comment-box__rating-title">Оценка:</p>
                    <div class="filters-rating__two">
                        <div class="two__item selected"></div>
                        <div class="two__item selected"></div>
                        <div class="two__item selected"></div>
                        <div class="two__item"></div>
                        <div class="two__item"></div>
                    </div>
                </div>
            </div>
        </div>


        </div>
        <?
    }
}
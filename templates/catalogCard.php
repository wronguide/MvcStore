<div class="cards__card">
    <div class="card__front">
        <h3 class="card__h3-reversed"><?= $item['name'] ?></h3>
        <svg width="0" height="0" viewBox="0 0 151 171">
            <defs>
                <mask id="mask">
                    <path d="M1.47329 60.2956C-5.04256 37.8266 11.4388 25.4989 29.6701 19.4199C46.0398 13.9616 62.6426 8.01371 79.2126 3.19753C142.568 -15.2171 168.265 78.0286 171.174 90.5652C174.422 104.565 130.17 126.889 124.08 143.915C117.99 160.942 35.1698 146.942 15.6827 143.915C13.8982 143.638 12.3131 143.038 10.9076 142.172C-9.98941 129.298 8.30931 83.8686 1.47329 60.2956Z"
                          fill="#fff"/>
                </mask>
            </defs>
        </svg>
        <img class="card__img" src='../public/img/catalog/<?= explode(',', $item['image'])[0] ?>' id="mask-id" alt="">
        <div class="card__bottom">
            <h3 class="card__title"><?= $item['name'] ?></h3>
            <?php if ($item['hot']) {
                echo "<img class='card__hot_icon'  src='../public/img/hot.png' alt=''>";
            } ?>

            <p class="card__age"><?= $item['age'] ?>+</p>
        </div>
    </div>

    <div class="card__back">
        <div>
            <img class="back__img" src='../public/img/catalog/<?= explode(',', $item['image'])[0] ?>' alt="">
            <div class="back__middle">
                <h3 class="card__title" data-id="<?= $item['ID'] ?>"><?= $item['name'] ?></h3>

                <div>
                    <?php if ($item['hot']) {
                        echo "<img class='card__hot_icon'  src='../public/img/hot.png' alt=''>";
                    } ?>
                    <p class="card__age"><?= $item['age'] ?>+</p>
                </div>
            </div>
            <p class="card__desc"><?= $item['slogan'] ?></p>
            <p class="card__price"><?= $item['price'] ?>р</p>

        </div>
        <?php if (isset($_SESSION['auth'])) { ?>
            <div class="back__bottom">
                <a href="#" class="card-button" id="add-to-cart" data-id="<?= $item['ID'] ?>">В корзину</a>
                <a href="#" class="heart-icon">
                    <img src="../public/img/heart_icon.png" alt="">
                </a>
            </div>
        <?php } ?>
    </div>
</div>


<link rel="stylesheet" href="../public/css/style.css">
<header class="box">
    <a href="/"><img src="../public/img/logo.svg"  alt="logo" class="logo"></a>
    <nav>
        <ul>
            <li><a href="catalog">КАТАЛОГ</a></li>
            <li><a href="#">БЛОГ</a></li>
            <li><a href="#">ФОРУМ</a></li>
            <li><a href="#">ПОДОБРАТЬ</a></li>
        </ul>
    </nav>
    <?
    if (isset($_SESSION['auth'])){
        ?>
            <div class="flex">
                <a href="userpage" class="header__user_icon"><img  src="../public/img/userIcon.png" alt=""></a>
                <a href="cart" class="header__cart_icon"><img  src="../public/img/cartIcon.png" alt=""><span class="header__cart_count"><?=$_SESSION['cart']?></span></a>
                <a href="exit" class="header__exit_icon"><img  src="../public/img/exit.png" alt=""></a>
            </div>
        <?
    }else{
        ?>
        <a href="registration" class="button button_reg">РЕГИСТРАЦИЯ</a>
        <?
    }
    ?>
</header>

<div class="reg_window">
    <img src="../public/img/closeIcon.png" alt="" class="close_icon">
    <h2 class="reg__title">Регистрация</h2>
    <form  class="reg__form">
        <input type="text" class="reg__input reg__name" placeholder="Имя" required>
        <input type="text" class="reg__input reg__surname" placeholder="Фамилия" required>
        <input type="email" class="reg__input reg__email" placeholder="Почта" required>
        <input type="number" class="reg__input reg__number_phone" placeholder="Номер телефона" required>
        <input type="password" class="reg__input  reg__password" placeholder="Пароль" required>
        <input type="password" class="reg__input  reg__password_repeat" placeholder="Пароль" required>
        <input type="file" id="reg__photo" name="reg__photo" accept="image/png, image/gif, image/jpeg"  hidden/>
        <label for="reg__photo" class="reg__photo"><img src="../public/img/download.png" alt=""><span>Фотография</span></label>
        <div class="flex reg__accept_box">
            <input type="checkbox" name="reg__accept" class="reg__accept" required>
            <label for="reg__accept" class="reg__accept_label">Пользовательское соглашение</label>
        </div>
        <p class="reg__error">Пользователь с такой почтой или номером телефона уже зарегестрирован!</p>
        <button type="submit" class="button reg__button" >Зарегистрироваться</button>
        <p  class="reg_login">Уже зарегистрированы? Войти!</p>
    </form>
</div>
<div class="login_window">
    <img src="../public/img/closeIcon.png" alt="" class="close_icon">
    <h2 class="login__title">Вход</h2>
    <form action="register" class="login__form">
        <input type="email" class="reg__input login__email" placeholder="Почта" required>
        <input type="password" class="reg__input  login__password" placeholder="Пароль" required>
        <p class="login__error">Неправильный логин или пароль</p>
        <button href="" class="button login__button" type="submit">Войти</button>
        <p  class="login__reg">Регистрация!</p>
    </form>
</div>
<div class="overlay"></div>
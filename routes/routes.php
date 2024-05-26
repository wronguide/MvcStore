<?php
$this->addRoute('home', 'HomeController@index');
$this->addRoute('filter', 'FilterController@filterProducts');
$this->addRoute('clearFilter', 'FilterController@clearFilter');
$this->addRoute('product', 'ProductController@index');
$this->addRoute('catalog', 'CatalogController@index');
$this->addRoute('register', 'RegisterController@register');
$this->addRoute('login', 'RegisterController@login');
$this->addRoute('logout', 'LogoutController@index');
$this->addRoute('cart', 'cartController@index');
$this->addRoute('add-to-cart','cartController@add_to_cart');
$this->addRoute('changeCountProductsInCart','cartController@changeByButtons');
$this->addRoute('reloadCount','cartController@reloadCount');
$this->addRoute('reloadCart','cartController@reloadCart');




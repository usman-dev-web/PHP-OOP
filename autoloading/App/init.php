<?php

// require_once __DIR__ . "/Product/InfoProduct.php";
// require_once __DIR__ . "/Product/Product.php";
// require_once __DIR__ . "/Product/Komik.php";
// require_once __DIR__ . "/Product/Game.php";
// require_once __DIR__ . "/Product/cetakInfoProduct.php";

// menggunakan autoloading
spl_autoload_register(function($class){
    require_once __DIR__ . "/Product/" . $class . ".php";
});
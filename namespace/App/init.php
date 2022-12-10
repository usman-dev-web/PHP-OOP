<?php

// require_once __DIR__ . "/Product/InfoProduct.php";
// require_once __DIR__ . "/Product/Product.php";
// require_once __DIR__ . "/Product/Komik.php";
// require_once __DIR__ . "/Product/Game.php";
// require_once __DIR__ . "/Product/cetakInfoProduct.php";
// require_once __DIR__ . "/Service/User.php";

// menggunakan autoloading
spl_autoload_register(function($class){
    // explode untuk memecah string
    $class  = explode("\\", $class);
    $class = end($class);
    require_once __DIR__ . "/Product/" . $class . ".php";
});

spl_autoload_register(function($class){
    $class  = explode("\\", $class);
    $class = end($class);
    require_once __DIR__ . "/Service/" . $class . ".php";
});
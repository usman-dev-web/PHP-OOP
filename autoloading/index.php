<?php

require_once __DIR__ . "/App/init.php";

$product1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$product2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 50);

$cetakProduct = new cetakInfoProduct();
$cetakProduct->tambahProduct($product1);
$cetakProduct->tambahProduct($product2);
echo $cetakProduct->cetak();

echo "<hr>";

$coba = new Coba();

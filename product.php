<?php

class Product {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    // membuat method
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// mencoba property
// $product1 = new Product();
// $product1->judul = "Spongebobs";
// var_dump($product1);

$product1 = new Product();
$product1->judul = "Naruto";
$product1->penulis = "Masashi Kishimoto";
$product1->penerbit = "Shonen Jump";
$product1->harga = 300000;

$product2 = new Product();
$product2->judul = "Uncharted";
$product2->penulis = "Neil Druckmann";
$product2->penerbit = "Sony Computer";
$product2->harga = 25000;

echo "Komik : " . $product1->getLabel(); 
echo "<br>";
echo "Game : " . $product2->getLabel();
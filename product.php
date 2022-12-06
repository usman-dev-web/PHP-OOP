<?php

class Product {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    
    // membuat method construck
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    // membuat method getLabel
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class cetakInfoProduct{
    public function cetak(Product $product){
        $str = "{$product->judul} | {$product->getLabel()} (Rp. {$product->harga})";
        
        return $str;
    }
}


$product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$product2 = new Product("Uncharted", "Neil Druckmann", "Sony Computer", 25000);

$product3 = new Product("Spongebos", "ngk tau");

echo "Komik : " . $product1->getLabel(); 
echo "<br>";
echo "Game : " . $product2->getLabel();
echo "<br>";
echo "Cartoon : " . $product3->getLabel();
echo "<br>";

$infoProduct1 = new cetakInfoProduct();
echo $infoProduct1->cetak($product1);
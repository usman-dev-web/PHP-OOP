<?php

class Product
{
    public $judul,
        $penulis,
        $penerbit;
    public $harga;


    // membuat method construck
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    // membuat method getLabel
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduct()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";

        return $str;
    }
}

class Komik extends Product
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduct()
    {
        $str = "Komik : " . parent::getInfoProduct() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
class Game extends Product
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduct()
    {
        $str = "Game : " . parent::getInfoProduct() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}
class cetakInfoProduct
{
    public function cetak(Product $product)
    {
        $str = "{$product->judul} | {$product->getLabel()} (Rp. {$product->harga})";

        return $str;
    }
}


$product1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$product2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();
// echo "<hr>";

// // $product1->harga = 20000;
// echo $product1->harga;

// $product3 = new Product("Spongebos", "ngk tau");

// echo "Komik : " . $product1->getLabel();
// echo "<br>";
// echo "Game : " . $product2->getLabel();
// echo "<br>";
// echo "Cartoon : " . $product3->getLabel();
// echo "<br>";

// $infoProduct1 = new cetakInfoProduct();
// echo $infoProduct1->cetak($product1);

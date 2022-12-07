<?php

class Product
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;


    // membuat method construck
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    // membuat method getLabel
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
        if($this->tipe == "Komik"){
            $str .= "- {$this->jmlHalaman} Halaman.";
        }else if($this->tipe == "Game"){
            $str .= "~ {$this->waktuMain} Jam.";
        }

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


$product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");

$product2 = new Product("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 0, 50, "Game");

echo $product1->getInfoLengkap();
echo "<br>";
echo $product2->getInfoLengkap();

// $product3 = new Product("Spongebos", "ngk tau");

// echo "Komik : " . $product1->getLabel();
// echo "<br>";
// echo "Game : " . $product2->getLabel();
// echo "<br>";
// echo "Cartoon : " . $product3->getLabel();
// echo "<br>";

// $infoProduct1 = new cetakInfoProduct();
// echo $infoProduct1->cetak($product1);

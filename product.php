<?php

class Product
{
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;


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

    public function setJudul($judul){
        if(!is_string($judul)){
            throw new Exception("Judul harus string");
        }
        return $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        if(!is_string($penulis)){
            throw new Exception("Nama Penulis Harus String");
        }
        return $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        return $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setHarga($harga){
        return $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

        public function setDiskon($diskon){
        $this->diskon = $diskon;
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
echo "<hr>";

// $product1->harga = 20000;
$product1->setDiskon(50);
echo $product1->getHarga();

echo "<hr>";
$product4 = new Product("barang baru");
$product4->setJudul("mainan");
echo $product4->getJudul();
echo "<br>";
$product4->setDiskon(20);
$product4->setHarga(100000);
echo $product4->getHarga();
echo "<br>";
$product4->setPenulis("Usman");
echo $product4->getPenulis();
<?php

interface InfoProduct
{
    public function getInfoProduct();
}

abstract class Product
{
    protected $judul,
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

    abstract public function getInfo();

    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("Judul harus string");
        }
        return $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        if (!is_string($penulis)) {
            throw new Exception("Nama Penulis Harus String");
        }
        return $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        return $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setHarga($harga)
    {
        return $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
}

class Komik extends Product implements InfoProduct
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduct()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";

        return $str;
    }
}

class Game extends Product implements InfoProduct
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduct()
    {
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";

        return $str;
    }
}

class cetakInfoProduct
{
    public $daftarProduct = [];

    public function tambahProduct(Product $product)
    {
        $this->daftarProduct[] = $product;
    }

    public function cetak()
    {
        $str = "Daftar Product : <br>";
        foreach ($this->daftarProduct as $p) {
            $str .= "- {$p->getInfoProduct()} <br>";
        }
        return $str;
    }
}


$product1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$product2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 50);

$cetakProduct = new cetakInfoProduct();
$cetakProduct->tambahProduct($product1);
$cetakProduct->tambahProduct($product2);
echo $cetakProduct->cetak();

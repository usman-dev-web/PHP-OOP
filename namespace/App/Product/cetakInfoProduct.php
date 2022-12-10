<?php

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

<?php

// membuat constant dengan define
// constant define digunakan ketika tidak menggunakan class
// define("NAMA", "M Usman Maulana");

// echo NAMA;


// membuat constant dengan const
// digunakan ketika menggunakan class
// const NAMA = "M Usman Maulana";
// echo NAMA;


// contoh constant menggunakan const pada class dan berhasil
class coba{
    const NAMA = "Usman";
}
echo coba::NAMA;

// contoh constant menggunakan define pada class namun error
// class coba{
//     define("NAMA", "USMAN");
// }
// $coba = new coba();
// echo $coba;

// magic constant


class cobaLagi{
    public function magic(){
        // return __LINE__;
        // return __FILE__;
        // return __DIR__;
        return __CLASS__;
    }
}

$coba = new cobaLagi();
echo $coba->magic();
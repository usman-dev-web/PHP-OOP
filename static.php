<?php

class contohStatic{
    public static $angka = 1;

    public function hello(){
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}
$contoh = new contohStatic();
echo $contoh->hello();
echo $contoh->hello();
echo $contoh->hello();
echo $contoh->hello();

echo "<hr>";

$contoh2 = new contohStatic();
echo $contoh2->hello();
echo $contoh2->hello();
echo $contoh2->hello();

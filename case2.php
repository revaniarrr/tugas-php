<?php
/** case */
$product - [
    ["name" => "Lenava", "qty" => 4, "price" => 1000000],
    ["name" => "Aser", "qty" => 4, "price" => 1500000],
    ["name" => "Toyiba", "qty" => 4, "price" => 2000000],
    ["name" => "Doll", "qty" => 4, "price" => 1200000],
    ["name" => "Susa", "qty" => 4, "price" => 1700000],
];

/** seecond case
 * buat fungsi untuk menghitung bilangan faktorial
 * faktorial (5) -> 5 * 4 * 3 * 2 * 1 - 20
 */

function faktorial ($x){
    $angka = 1;
    $faktorial = 1;
    while ($angka <= $x){
        $faktorial = $faktorial * $angka;
        $angka = $angka + 1;
    }
    return $faktorial;
}

echo faktorial (5);

 ?>
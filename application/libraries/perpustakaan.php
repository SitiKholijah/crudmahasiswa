<?php

class Perpustakaan {
    function itung($jumlahD,$jumlahT,$jumlahR,$jumlahTD){
        $total = $jumlahD+$jumlahT+$jumlahR+$jumlahTD;
        $totalB75 = ($total)-75;
        $total20 = ((0.2 *$jumlahR));
        echo "Total Keseluruhan Buku : " . $total;
        echo "<br/>";
        echo "Total Keseluruhan Buku yang dikembalikan sebanyak 75 buku : " . $totalB75;
        echo "<br/>";
        echo "Total Keseluruhan Buku Jika 20% Rusak : " . $total20;
        echo "<br/>";
    }
}
<?php

// Jualan Produk
// Komik
// Game

// Sebuah Class
class Produk
{
    // Property
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // Magic Method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Sebuah Method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// Object Mendefinisikan sebuah Komik
$produk1 = new Produk("One Punch Man", "Yusuke Murata", "Shueisha", 35000);

// Object Mendefinisikan sebuah Game 
$produk2 = new Produk("GTA", "Davis Jones", "Rockstar", 300000);
$produk3 = new Produk("AOT");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);

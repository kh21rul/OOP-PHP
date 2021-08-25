<?php

// Jualan Produk
// Komik
// Game

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "One Punch Man";
$produk3->penulis = "Yusuke Murata";
$produk3->penerbit = "Shueisha";
$produk3->harga = 35000;

$produk4 = new Produk();
$produk4->judul = "GTA";
$produk4->penulis = "David Jones";
$produk4->penerbit = "Rockstar";
$produk4->harga = 300000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

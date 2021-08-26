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

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Object Mendefinisikan sebuah Komik
$produk1 = new Produk("One Punch Man", "Yusuke Murata", "Shueisha", 35000);

// Object Mendefinisikan sebuah Game 
$produk2 = new Produk("GTA", "Davis Jones", "Rockstar", 300000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

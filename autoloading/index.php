<?php

require_once 'App/init.php';

$produk1 = new Komik("One Punch Man", "Yusuke Murata", "Shueisha", 35000, 100);
$produk2 = new Game("Grand Thef Auto", "Davis Jones", "Rockstar", 300000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
echo "<hr>";

new Coba();

<?php

// tidak bisa digunakan didalam class 
// define('NAMA', 'Khairul Aqram');
// echo NAMA;

// echo "<br>";

// bisa digunakan didalam class
// const UMUR = 32;
// echo UMUR;

// class Coba
// {
//     const NAMA = 'Khairul Aqram';
// }

// echo Coba::NAMA;




// echo __FILE__;


// function coba()
// {
//     return __FUNCTION__;
// }

// echo coba();

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new COba;
echo $obj->kelas;

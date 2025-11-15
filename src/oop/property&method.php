<?php

//class
class Produk{
    //property
    public $judul,
           $penulis,
           $penerbit,
           $harga;
    //method
    public function getlabel(){
        return "$this->judul $this->penulis $this->penerbit $this->harga";
    }

}

//object
$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto ";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 300000;
var_dump($produk1);
echo "<br>";
echo "Komik ".$produk1->getlabel();

?>
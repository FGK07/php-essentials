<?php

//class
class Produk{
    //property
    public $judul,
           $penulis,
           $penerbit,
           $harga;
    //constructor
    public function __construct($judul,$penulis,$penerbit,$harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;


    }
    //method
    public function getlabel(){
        return "Judul : $this->judul <br> Penulis : $this->penulis <br> Penerbit : $this->penerbit <br> Harga : $this->harga";
    }

}

//object
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
echo "<br>";
var_dump($produk1);
echo"<br>";
echo "Detail Produk";
echo "<br>";
echo $produk1->getLabel();

?>
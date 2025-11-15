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
        return " $this->penulis, $this->penerbit";
    }

    
}

class CetakInfoProduk {
    //membuat object menjadi tipe data sendiri
    public function cetak ($produk){
        $str = "{$produk->judul} |{$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

//object
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);//isi constructor
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);//isi constructor

echo "Info Produk";
echo "<br>";
echo "Komik:".$produk1->getLabel();
echo "<br>";
echo "Game:".$produk2->getLabel();
echo "<br>";

//instansiasi class
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo "<br>";
$infoProduk2 = new CetakInfoProduk();
echo $infoProduk2->cetak($produk2);

?>
<?php

    //Jualan Produk
//Komik
//Game

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

        // echo "Hello World";
    }

    // public function sayHello(){
    //     return "Hello World";
    // }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}


class CetakInfoProduk {
    public function cetak (Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. ($produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto","Shonen Jump", 30000);
// $produk3->judul = "Naruto";
// $produk3->penulis = "Masashi Kishimoto";
// $produk3->penerbit = "Shonen Jump";
// $produk3->harga = 30000;
//var_dump ($produk3);

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// // echo $produk3->sayHello();

// echo $produk3->getLabel();

// echo "<hr>";

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 2500000);
// $produk4->judul = "Uncharted";
// $produk4->penulis = "Neil Druckmann";
// $produk4->penerbit = "Sony Computer";
// $produk4->harga = 2500000;

// $produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produkd2->getLabel();
echo "<br>";
// var_dump ($produk3);

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

?>
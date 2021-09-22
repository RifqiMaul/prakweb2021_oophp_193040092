<?php

    //jualan produk
    //komik
    //game

    class produk {
        public $judul = "judul", 
               $penulis = "penulis",
               $penerbit = "penerbit",
               $harga = 0; 

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    }

    // $produk1 = new produk();
    // $produk1->judul = "Doraemon";
    // var_dump ($produk1);

    // $produk2 = new produk();
    // $produk2->judul = "Mobile Legend";
    // $produk2->tambahProperty="Perang";
    // var_dump($produk2);
    
    $produk3 = new produk();
     $produk3->judul = "Doraemon";
     $produk3->penulis = "Ikiw";
     $produk3->penerbit = "Wikipedia";
     $produk3->harga=50000;
     
     $produk4 = new produk();
     $produk4->judul = "Mobile Legend";
     $produk4->penulis = "Maul";
     $produk4->penerbit = "Games.com";
     $produk4->harga=500000;

     echo "komik : " . $produk3->getLabel();
     echo "<br>";
     echo "Game : " . $produk4->getLabel();

?>
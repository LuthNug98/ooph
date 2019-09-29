<?php 


// jualan produk 
// manga
// game


class produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0; 
}

$produk1 = new produk();
$produk1->judul = "Naruto";
var_dump($produk1);

$produk2 = new produk();
$produk2->judul = "FIFA 20"
var_dump($produk2);

 ?>
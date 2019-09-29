<?php 


// jualan produk 
// manga
// game


class produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0; 


		// public function sayHello() {
		// 	return "Hello World";
		// }

		   public function getLabel() {
		   		return "$this->penulis, $this->penerbit"; 
		   }

}

// $produk1 = new produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "FIFA 20"
// var_dump($produk2);


$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masasho Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 3000;

// echo "Komik : $produk3->penulis,$produk3->penerbit";
// echo "<br>";
// echo $produk3->getLabel(); 


$produk4 = new produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

 ?>
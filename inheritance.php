<?php 


class produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain;


		   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
		   		$this->judul = $judul;
		   		$this->penulis = $penulis;
		   		$this->penerbit = $penerbit;
		   		$this->harga = $harga;
		   		$this->jmlHalaman = $jmlHalaman;
		   		$this->waktuMain = $waktuMain;
	

		   }

 
		   public function getLabel() {
		   		return "$this->penulis, $this->penerbit"; 
		   }


		   public function getInfoProduk() {
		   		$str = ": {$this->judul} | {$this->getLabel()} ({Rp. {$this->harga} })";

		   		// if ( $this->tipe == "Komik" ) {
		   		// 	$str .= " - {$this->jmlHalaman} Halaman.";
		   		// } 
		   		// else if( $this->tipe == "Game" ) {
		   		// 	$str .= " ~ {$this->waktuMain} Jam.";
		   		// }


		   		return $str;

		   }

}


class komik extends produk {
	public function getInfoProduk() {
		$str = "Komik : {$this->judul} | {$this->getLabel()} ({Rp. {$this->harga} }) - {$this->jmlHalaman} Halaman.";
		return $str;

	}

}


class game extends produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLabel()} ({Rp. {$this->harga} }) - {$this->jmlHalaman} Jam.";
		return $str;
	}
}



class CetakInfoProduk {
	public function cetak( produk $produk ) {
	$str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
	return $str;

	}
} 


$produk1 = new komik("Naruto", "Masashi Kishimoto", "shonen Jump", 30000, 100, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50, 0, 50);

// $produk3 = new produk("Dragon ball");

// Komik : Masashi Kishimoto, shonen Jump
// Game : Neil Druckman, Sony Computer
// Naruto | Masashi Kishimoto, shonen Jump, (Rp. 30000)

// Komik : Naruto | Masashi Kishimoto, Shonen Jump (RP. 3000) - 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sony Computer (RP. 250000) ~ 50 Jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
 ?>
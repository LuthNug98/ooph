<?php 


class produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain,
		   $tipe;


		   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
		   		$this->judul = $judul;
		   		$this->penulis = $penulis;
		   		$this->penerbit = $penerbit;
		   		$this->harga = $harga;
		   		$this->jmlHalaman = $jmlHalaman;
		   		$this->waktuMain = $waktuMain;
		   		$this->tipe = $tipe; 

		   }

 
		   public function getLabel() {
		   		return "$this->penulis, $this->penerbit"; 
		   }

		   public function getInfoLengkap() {
		   		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} ({Rp. {$this->harga} })";

		   		if ( $this->tipe == "Komik" ) {
		   			$str .= " - {$this->jmlHalaman} Halaman.";
		   		} 
		   		else if( $this->tipe == "Game" ) {
		   			$str .= " ~ {$this->waktuMain} Jam.";
		   		}


		   		return $str;

		   }

}



class CetakInfoProduk {
	public function cetak( produk $produk ) {
	$str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
	return $str;

	}
} 

$produk1 = new produk("Naruto", "Masashi Kishimoto", "shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");
// $produk3 = new produk("Dragon ball");

// Komik : Masashi Kishimoto, shonen Jump
// Game : Neil Druckman, Sony Computer
// Naruto | Masashi Kishimoto, shonen Jump, (Rp. 30000)

// Komik : Naruto | Masashi Kishimoto, Shonen Jump (RP. 3000) - 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sony Computer (RP. 250000) ~ 50 Jam.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
 ?>
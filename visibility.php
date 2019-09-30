<?php 


class produk {
	public $judul,
		   $penulis,
		   $penerbit;
		   

	private $harga;
	protected $diskon = 0;


		   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		   		$this->judul = $judul;
		   		$this->penulis = $penulis;
		   		$this->penerbit = $penerbit;
		   		$this->harga = $harga;
		   }


		   public function setDiskon ($diskon) {
		   	  $this->diskon = $diskon;
		   } 


			public function getHarga() {
				return $this->harga - ( $this->harga * $this->diskon / 100 );
			}


 
		   public function getLabel() {
		   		return "$this->penulis, $this->penerbit"; 
		   }


		   public function getInfoProduk() {
		   		$str = ": {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		   		// if ( $this->tipe == "Komik" ) {
		   		// 	$str .= " - {$this->jmlHalaman} Halaman.";
		   		// } 
		   		// else if( $this->tipe == "Game" ) {
		   		// 	$str .= " ~ {$this->waktuMain} Jam.";
		   		// }


		   		return $str;

		   }

}

//komik
class komik extends produk {
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;

	}


	public function getInfoProduk() { 
		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman."; 
		return $str;

	}

}
// komik 



// game
class game extends produk { 

	public $waktuMain;

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {

		parent::__construct($judul , $penulis, $penerbit , $harga);

		$this->waktuMain = $waktuMain; 	
}


	public function getInfoProduk() {
		$str = "Game  : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}



class CetakInfoProduk {
	public function cetak( produk $produk ) {
	$str = "{$produk->judul} | {$produk->getLabel()}, {(Rp. $produk->harga)}";
	return $str;

	}
} //game

$produk1 = new komik("Naruto", "Masashi Kishimoto", "shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// $produk3 = new produk("Dragon ball");

// Komik : Masashi Kishimoto, shonen Jump
// Game : Neil Druckman, Sony Computer
// Naruto | Masashi Kishimoto, shonen Jump, (Rp. 30000)

// Komik : Naruto | Masashi Kishimoto, Shonen Jump (RP. 3000) - 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sony Computer (RP. 250000) ~ 50 Jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();

 ?>
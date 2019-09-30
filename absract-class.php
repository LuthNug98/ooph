<?php 


abstract  class produk {
	private $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon = 0;


		   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		   		$this->judul = $judul;
		   		$this->penulis = $penulis;
		   		$this->penerbit = $penerbit;
		   		$this->harga = $harga;
		   }

		   //judul

		   public function setJudul( $judul ) {

		   		$this->judul = $judul;
		   }

		    public function getJudul() {

		   		return $this->judul;
		   }
		   //judul

		   //penulis
		   public function setPenulis( $penulis ) {

		   		$this->penulis = $penulis; 
		   }

		    public function getPenulis() {

		   		return $this->penulis;
		   }
		   //penulis 

		   //penerbit
		   public function setPenerbit ( $penerbit ) {

		   		$this->penerbit = $penerbit;
		   }


		   public function getPenerbit ( $penerbit ) {

		   		return  $this->penerbit;
		   }
		   //penerbit

		   //harga
		  
 			public function getHarga() {
				return $this->harga - ( $this->harga * $this->diskon / 100 );
			}


		   public function setHarga( $harga ) {

		   		$this->harga = $harga;
		   } 
		   //harga


		   //diskon
		   public function setDiskon ( $diskon ) {
		   	  $this->diskon = $diskon;
		   } 

			
			public function getDiskon() {
				return $this->diskon;
			}
			//diskon

 			

		   public function getLabel() {
		   		return "$this->penulis, $this->penerbit"; 
		   }


		   abstract public function getInfoProduk();

		   public function getInfo() {
		   		$str = ": {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

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
		$str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman."; 
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
		$str = "Game  : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}



class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk( produk $produk ) {
		$this->daftarProduk[] = $produk;
	}

	public function cetak() {
	$str = "DAFTAR PRODUK : <br> ";

	foreach ($this->daftarProduk as $p) {
		$str .= "- {$p->getInfoProduk()} <br>"; 
	}

	return $str;

	}
} //game

$produk1 = new komik("Naruto", "Masashi Kishimoto", "shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();





 ?>
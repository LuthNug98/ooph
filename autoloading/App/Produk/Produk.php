<?php 

Abstract class Produk {
	protected $judul,
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


		  abstract public function getInfo();		  

} 





 ?>
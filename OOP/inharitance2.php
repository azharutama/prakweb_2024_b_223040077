<?php
class produk
{
  //value
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain;

  //contruktor untuk inisialisasi objek
  public  function __construct($tipe, $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
  {

    //memastikan nilai pada function sama dengan variable dalam kelas produk
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  //untuk mendapat nilai
  public function getLabel()
  {
    return " $this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul}|{$this->getLabel()}  {$this->harga} ";

    return $str;
  }
}

class cetakInfoProduk
{

  ///function untuk mencerak info produk dari kelas produk
  public function cetak(produk $produk)
  {
    $str = " {$produk->judul} | {$produk->getLabel()} {$produk->harga}";
    return $str;
  }
}



class komik extends produk
{
  public function getInfoProduk()
  {
    $str = "Komik :{$this->judul}|{$this->getLabel()}  {$this->harga} - {$this->jmlHalaman} halaman";
    return $str;
  }
}
class game extends produk
{
  public function getInfoProduk()
  {
    $str = "{game : {$this->judul}|{$this->getLabel()}  {$this->harga} - {$this->waktuMain} jam";
    return $str;
  }
}

$produk1 = new komik("komik", "naruto", "masashi", "shonen jump", 30000, 100, 0);
$produk2 = new game("game", "uncharted", "neil", "sony computer", 30000, 0, 50);


echo $produk1->getInfoProduk();

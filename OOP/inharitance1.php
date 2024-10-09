<?php
class produk
{
  //value
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain,
    $tipe;

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
    $this->tipe = $tipe;
  }

  //untuk mendapat nilai
  public function getLabel()
  {
    return " $this->penulis, $this->penerbit";
  }

  public function getInfoLengkap()
  {
    $str = "{$this->tipe} : {$this->judul}|{$this->getLabel()}  {$this->harga} ";
    if ($this->tipe == "komik") {
      $str .= "- $this->jmlHalaman} halaman";
    } else if ($this->tipe == "game") {
      $str .= "- $this->waktuMain} jam";
    }

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


$produk1 = new produk("komik", "naruto", "masashi", "shonen jump", 30000, 100, 0);
$produk2 = new produk("game", "uncharted", "neil", "sony computer", 30000, 0, 50);


echo $produk1->getInfoLengkap();

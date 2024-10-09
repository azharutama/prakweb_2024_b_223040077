<?php
class Komik extends produk implements Infoproduk
{
  public  $jmlHalaman;
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $jmlHalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit = "penerbit", $harga,  $jmlHalaman);

    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk()
  {
    $str = "Komik : " . $this->getInfo()  . "- {$this->jmlHalaman} halaman";
    return $str;
  }

  public function getInfo()
  {
    $str = "{$this->judul}|{$this->getLabel()}  {$this->harga} ";

    return $str;
  }
}

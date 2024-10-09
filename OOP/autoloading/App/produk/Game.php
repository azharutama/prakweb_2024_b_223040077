<?php
class Game extends produk implements Infoproduk

{
  public  $waktuMain;
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $waktuMain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga,  $waktuMain);

    $this->waktuMain = $waktuMain;
  }


  public function getInfoProduk()
  {

    $str = "game : "  .  $this->getInfo()  . " - {$this->waktuMain} jam";
    return $str;
  }

  public function getInfo()
  {
    $str = "{$this->judul}|{$this->getLabel()}  {$this->harga} ";

    return $str;
  }
}

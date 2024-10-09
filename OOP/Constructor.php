<?php
class produk
{
  //value
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  //contruktor untuk inisialisasi objek
  public  function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {

    //memastikan nilai pada function sama dengan variable dalam kelas produk
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  //untuk mendapat nilai
  public function getLabel()
  {
    return " $this->penulis, $this->penerbit";
  }
}


$produk1 = new produk("naruto", "masashi", "shonen jump", 30000);
$produk2 = new produk("uncharted", "neil", "sony computer", 30000);
$produk3 = new produk("dragonball");


echo "komik :" . $produk1->getLabel();
echo "<br>";
echo "game: " . $produk2->getLabel();
echo "<br>";
echo $produk3->getLabel();

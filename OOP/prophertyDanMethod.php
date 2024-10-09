<?php
class produk
{

  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  public function sayHello()
  {
    return "hello world";
  }

  public function getLabel()
  {
    return " $this->penulis, $this->penerbit";
  }
}

$produk1 = new produk();
$produk1->judul = "naruto";
var_dump($produk1);

$produk2 = new produk();
$produk2->judul = "uncharted";
var_dump($produk2);


$produk3 = new produk();
$produk3->judul = "naruto";
$produk3->penulis = "Masashi";
$produk3->penerbit = "shone jumpn";
$produk3->harga = 30000;

$produk4 = new produk();
$produk4->judul = "uncharted";
$produk4->penulis = "neil";
$produk4->penerbit = "sony";
$produk4->harga = 30000;

echo "komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo "game : $produk4->penulis, $produk4->penerbit";
echo "<br>";
echo $produk3->sayHello();
echo "<br>";
echo $produk3->getLabel();

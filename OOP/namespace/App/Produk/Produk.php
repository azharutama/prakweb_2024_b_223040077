<?php
abstract class produk
{
  //value
  protected
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;





  //contruktor untuk inisialisasi objek
  public  function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {

    //memastikan nilai pada function sama dengan variable dalam kelas produk
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function setJudul($judul)
  {
    $this->judul = $judul;
  }

  public function getJudul()
  {
    return $this->judul;
  }


  public function setPenulis($penulis)
  {
    $this->penulis = $penulis;
  }

  public function getPenulis()
  {
    return $this->penulis;
  }
  public function setPenerbit($penerbit)
  {
    $this->penerbit = $penerbit;
  }

  public function getPenerbit()
  {
    return $this->penerbit;
  }

  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  public function getDiskon()
  {
    return $this->diskon;
  }


  public function setHarga($harga)
  {
    $this->harga = $harga;
  }

  public function getHarga()
  {
    return "harga" . $this->harga - ($this->harga * $this->diskon / 100);
  }


  //untuk mendapat nilai
  public function getLabel()
  {
    return " $this->penulis, $this->penerbit";
  }

  abstract public function getInfo();
}

class cetakInfoProduk
{
  public $daftarProduk = array();

  public function tambahProduk(produk $produk)
  {
    $this->daftarProduk[] = $produk;
  }

  ///function untuk mencerak info produk dari kelas produk
  public function cetak()
  {
    $str = " DAFTAR PRODUK <br>";

    foreach ($this->daftarProduk as $p) {
      $str .= "-{$p->getInfoProduk()} <br>";
    }
    return $str;
  }
}

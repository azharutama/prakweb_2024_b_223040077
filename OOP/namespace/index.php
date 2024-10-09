<?php
require_once 'App/init.php';


// $produk1 = new komik("naruto", "masashi", "shonen jump", 30000, 100, "komik");
// $produk2 = new game("uncharted", "neil", "sony computer", 30000, 50, "game");


// $cetakProduk = new cetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// echo "<hr>";
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();

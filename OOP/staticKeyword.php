<?php
class contohStatic
{
  public static $angka = 1;

  public static function halo()
  {
    return "halo " . self::$angka++ . " kali .<br> ";
  }
}




class contoh
{
  public static $angka = 1;

  public function halo()
  {
    return "halo " . self::$angka++ . " kali .<br>";
  }
}


echo contohStatic::$angka;
echo "<br>";
echo contohStatic::halo();
echo "<br>";
echo contohStatic::halo();

echo "<hr>";

$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

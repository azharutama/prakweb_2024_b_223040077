<?php
define('NAMA', 'azhar utama');
echo NAMA;
echo "<br>";

const UMUR = 32;
echo UMUR;

echo "<br>";
class Coba
{
  const NAMA = 'azhar utama';
}

echo Coba::NAMA;
echo "<br>";
echo __LINE__;

echo "<br>";
echo __FILE__;

echo "<br>";
echo __DIR__;

echo "<br>";
function coba()
{
  return __FUNCTION__;
}

echo "<br>";
class tes
{
  public $kelas = __CLASS__;
}
$obj = new tes();
echo $obj->kelas;

echo "<br>";
echo __TRAIT__;
echo "<br>";
echo __METHOD__;

echo "<br>";
echo __NAMESPACE__;

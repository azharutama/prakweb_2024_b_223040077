<?php
abstract class buah
{

  private $warna;

  abstract public function makan();
  public function setWarna($warna)
  {
    $this->warna = $warna;
  }
}

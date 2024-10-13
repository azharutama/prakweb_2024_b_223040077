<?php
class About
{
  public function index($nama = 'azhar ', $pekerjaan = 'mahasiswa ')
  {

    echo "haloo saya " . $nama . "saya adalah seorang " . $pekerjaan;
  }

  public function page()
  {
    echo 'About/page';
  }
}

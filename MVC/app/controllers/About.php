<?php
class About extends Controller

{
  public function index($nama = 'azhar ', $pekerjaan = 'mahasiswa ', $umur = 20)
  {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = 'About me';
    $this->view('template/header', $data);
    $this->view('about/index', $data);
    $this->view('template/footer', $data);
  }

  public function page()
  {
    $data['judul'] = 'page';
    $this->view('about/page', $data);
  }
}

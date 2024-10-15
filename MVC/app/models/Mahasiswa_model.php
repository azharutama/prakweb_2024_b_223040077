<?php

class Mahasiswa_model
{


  //   [
  //     "nama" => "azhar",
  //     "nrp" => "223040077",
  //     "email" => "azhar@gmail.com",
  //     "jurusan" => "informatika"

  //   ],
  //   [
  //     "nama" => "azhar",
  //     "nrp" => "223040077",
  //     "email" => "azhar@gmail.com",
  //     "jurusan" => "informatika"
  //   ],
  //   [
  //     "nama" => "azhar",
  //     "nrp" => "223040077",
  //     "email" => "azhar@gmail.com",
  //     "jurusan" => "informatika"
  //   ]
  // ];

  private $dbh;
  private $stmt;

  public function __construct()
  {
    $dsn = 'mysql:host=localhost;dbname=mvc';
    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();

    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

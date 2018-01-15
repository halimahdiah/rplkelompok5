<?php
try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=siperpustakaan','root','fernandy21');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare('SELECT * FROM anggota');


$query->execute();

$daftar_anggota = $query->fetchAll(PDO::FETCH_OBJ);

require ('index.view.php')
 ?>


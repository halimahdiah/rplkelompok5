<?php
try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=siperpustakaan','root','1998');
} catch (PDOException $e) {
  die($e->getMessage());
}

// $query = $koneksi->prepare('SELECT * FROM book');
$query = $koneksi->prepare('SELECT * FROM book where Type = "Filsafat"');

$query->execute();

$daftar_koleksi = $query->fetchAll(PDO::FETCH_OBJ);

require ('index.view.php')
 ?>


<?php
try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=siperpustakaan','root','1998');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare('SELECT * FROM borrow_transaction join anggota on borrow_transaction.Anggota_id = anggota.username join return_transaction on anggota.username = return_transaction.Anggota_id order by Fine desc');


$query->execute();

$daftar_koleksi = $query->fetchAll(PDO::FETCH_OBJ);

require ('denda.view.php');
?>


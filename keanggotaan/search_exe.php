
<?php
try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=siperpustakaan','root','fernandy21');
} catch (PDOException $e) {
  die($e->getMessage());
}

//$query = $koneksi->prepare('SELECT * FROM book');
$keyword= $_POST['keyword'];
$query = $koneksi->prepare("SELECT * from anggota where username like '%$keyword%' or nama like '%$keyword%' or alamat like '%$keyword%' or jk like '%$keyword%' or pekerjaan like '%$keyword%' ");

$query->execute();

$daftar_anggota = $query->fetchAll(PDO::FETCH_OBJ);

require ('index.view.php');


 ?>

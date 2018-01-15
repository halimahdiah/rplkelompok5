
<?php
try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=siperpustakaan','root','1998');
} catch (PDOException $e) {
  die($e->getMessage());
}

//$query = $koneksi->prepare('SELECT * FROM book');
$keyword= $_POST['keyword'];
$query = $koneksi->prepare("SELECT * from search_denda where Anggota_id like '%$keyword%' or nama like '%$keyword%' or Date_of_load like '%$keyword%' or Return_date like '%$keyword%'");

$query->execute();

$daftar_koleksi = $query->fetchAll(PDO::FETCH_OBJ);

require ('denda.view.php');


 ?>

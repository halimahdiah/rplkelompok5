
<?php
try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=siperpustakaan','root','1998');
} catch (PDOException $e) {
  die($e->getMessage());
}

//$query = $koneksi->prepare('SELECT * FROM book');
$keyword= $_POST['keyword'];
$query = $koneksi->prepare("SELECT * from book where Book_id like '%$keyword%' or Title like '%$keyword%' or Author like '%$keyword%' or Tahun_terbit like '%$keyword%' or Total_page like '%$keyword%' ");

$query->execute();

$daftar_koleksi = $query->fetchAll(PDO::FETCH_OBJ);

require ('index.view.php');


 ?>

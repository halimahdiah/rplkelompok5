<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
   $id = $_GET['Book_id'];

try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=siperpustakaan','root','1998');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare("DELETE FROM book WHERE Book_id = :Book_id");
$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query->bindParam(':Book_id', $id);

try {
  $query->execute();
  session_start();
  $_SESSION['succes'] = 'Data berhasil dihapus';
  header('Location: index.php');
} catch (PDOException $e) {
  die($e->getMessage());
}

}

?>

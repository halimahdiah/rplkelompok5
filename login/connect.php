<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $username = $_POST['username'];
   $password = $_POST['password'];

try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=siperpustakaan','root','1998');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare("SELECT * FROM anggota
                            WHERE username = :username
                            AND password = :password
                           ");

$query2 = $koneksi->prepare("SELECT * FROM petugas
                            WHERE username = :username
                            AND password = :password
                           ");

$query->bindParam(':username', $username);
$query->bindParam(':password', $password);
$query2->bindParam(':username', $username);
$query2->bindParam(':password', $password);

$query->execute();
$query2->execute();

$ditemukan = $query->fetch(PDO::FETCH_OBJ);
$ditemu = $query2->fetch(PDO::FETCH_OBJ);

if ($ditemukan) {
  $_SESSION['usernameA'] = $username;
  header('Location: http://localhost/rplkelompok5/home.php');
  }
elseif ($ditemu) {
  $_SESSION['usernameP'] = $username;
  header('Location: http://localhost/rplkelompok5/dashboard.php');
  }
}

?>

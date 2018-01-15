<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $id = $_POST['username'];
   $nama = $_POST['nama'];
   $jenis_kelamin = $_POST['jk'];
   $tempat_lahir = $_POST['tempat_lahir'];
   $tanggal_lahir = $_POST['tanggal_lahir'];
   $alamat = $_POST['alamat'];
   $nomor_telepon = $_POST['telepon'];
   $pekerjaan = $_POST['pekerjaan'];
   $email = $_POST['email'];

  try {
    $koneksi = new PDO('mysql:host=localhost;
    dbname=siperpustakaan','root','fernandy21');
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  $query = $koneksi->prepare("INSERT INTO anggota
                              (username, nama, jk, tempat_lahir, tanggal_lahir, alamat, telepon, pekerjaan, email) values
                              (:username, :nama, :jk, :tempat_lahir, :tanggal_lahir, :alamat, :telepon, :pekerjaan, :email)
                             ");

  $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query->bindParam(':username', $id);
  $query->bindParam(':nama', $nama);
  $query->bindParam(':jk', $jenis_kelamin);
  $query->bindParam(':tempat_lahir', $tempat_lahir);
  $query->bindParam(':tanggal_lahir', $tanggal_lahir);
  $query->bindParam(':alamat', $alamat);
  $query->bindParam(':telepon', $nomor_telepon);
  $query->bindParam(':pekerjaan', $pekerjaan);
  $query->bindParam(':email', $email);

  try {
    $query->execute();
    session_start();
    $_SESSION['succes'] = 'Data berhasil ditambahkan.';
    header('Location: index.php');
  } catch (PDOException $e) {
    // die($e->getMessage());
    if ($e->errorInfo[1] == 1062) { // 1062 adalah kode error untuk duplicate entry
       session_start();
       $_SESSION['error'] = 'Id yang anda input sudah ada.';
       header('Location: index.php');
     }
     else if ($e->errorInfo[1] == 1292) {
       session_start();
       $_SESSION['error'] = 'Tanggal lahir harus diisi.';
       header('Location: index.php');
     }
     else if (empty($id)) {
       session_start();
      $_SESSION['error'] = 'Data id tidak boleh kosong.';
       header('Location: index.php'); 
     }
     else if ($e->errorInfo[1] == 1366) { 
       session_start();
       $_SESSION['error'] = 'Nomor telepon harus angka.';
       header('Location: index.php');
     }
  }
}
 
?>

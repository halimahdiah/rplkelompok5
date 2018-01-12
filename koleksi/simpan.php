<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $id = $_POST['Book_id'];
   $barcode = $_POST['Barcode'];
   $judul = $_POST['Title'];
   $author = $_POST['Author'];
   $publisher = $_POST['Publisher'];
   $tahun = $_POST['Tahun_terbit'];
   $tipe = $_POST['Type'];
   $halaman = $_POST['Total_page'];
   $isbn = $_POST['ISBN'];
   $jumlah = $_POST['Jumlah_copy'];
   $lokasi = $_POST['Location'];
   $status = $_POST['Status'];


  try {
    $koneksi = new PDO('mysql:host=localhost;
    dbname=siperpustaakaan','root','1998');
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  $query = $koneksi->prepare("INSERT INTO book
                              (Book_id, Barcode, Title, Author, Publisher, Tahun_terbit, Type, Total_page, ISBN, Jumlah_copy, Location, Status) values
                              (:Book_id, :Barcode, :Title, :Author, :Publisher, :Tahun_terbit, :Type, :Total_page, :ISBN, :Jumlah_copy, :Location, :Status)
                             ");

  $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query->bindParam(':Book_id', $id);
  $query->bindParam(':Barcode', $barcode);
  $query->bindParam(':Title', $judul);
  $query->bindParam(':Author', $author);
  $query->bindParam(':Publisher', $publisher);
  $query->bindParam(':Tahun_terbit', $tahun);
  $query->bindParam(':Type', $tipe);
  $query->bindParam(':Total_page', $halaman);
  $query->bindParam(':ISBN', $isbn);
  $query->bindParam(':Jumlah_copy', $jumlah);
  $query->bindParam(':Location', $lokasi);
  $query->bindParam(':Status', $status);

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
       header('Location: tambah.php');
     }
     else if (empty($id) || empty($nama) || empty($alamat)) {
       session_start();
      $_SESSION['error'] = 'Data id tidak boleh kosong.';
       header('Location: tambah.php'); 
     }
     else if ($e->errorInfo[1] == 1366) { 
       session_start();
       $_SESSION['error'] = 'Data id harus angka.';
       header('Location: tambah.php');
     }
  }
}
 
?>

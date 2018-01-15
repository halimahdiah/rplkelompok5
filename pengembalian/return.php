<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  // $id = $datakode;
   $id_anggota = $_POST['username'];
   $book1 = $_POST['Book_id1'];
   $book2 = $_POST['Book_id2'];
   $book3 = $_POST['Book_id3'];
   $kembali = date("Y-m-d");
   

  try {
    $koneksi = new PDO('mysql:host=localhost;
    dbname=siperpustakaan','root','1998');
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  $query = $koneksi->prepare("SELECT max(Trans_id) as kode from return_transaction");
    
      $query->execute();

$datakode = $query->fetchAll(PDO::FETCH_OBJ);
 foreach ($datakode as $koleksi){
      // echo $koleksi->kode;
 }

    $kode = $koleksi->kode;

    $datakode = $kode+1;

    $id = $datakode;

  $query = $koneksi->prepare("INSERT INTO return_transaction
                              (Trans_id, Anggota_id, Return_date, Last_update) values
                              (:Trans_id, :Anggota_id, :Return_date, NOW())
                             ");

  $query2 = $koneksi->prepare("INSERT INTO return_trans_dtl
                              (Trans_id, Book_id, Last_update) values
                              (:Trans_id, :Book_id1, NOW())
                             ");

  $query3 = $koneksi->prepare("INSERT INTO return_trans_dtl
                              (Trans_id, Book_id, Last_update) values
                              (:Trans_id, :Book_id2, NOW())
                             ");

  $query4 = $koneksi->prepare("INSERT INTO return_trans_dtl
                              (Trans_id, Book_id, Last_update) values
                              (:Trans_id, :Book_id3, NOW())
                             ");


  $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query->bindParam(':Trans_id', $id);
  $query->bindParam(':Anggota_id', $id_anggota);
  // $query->bindParam(':Date_of_load', $pinjam);
  $query->bindParam(':Return_date', $kembali);
  $query2->bindParam(':Trans_id', $id);
  $query2->bindParam(':Book_id1', $book1);
  $query3->bindParam(':Trans_id', $id);
  $query3->bindParam(':Book_id2', $book2);
  $query4->bindParam(':Trans_id', $id);
  $query4->bindParam(':Book_id3', $book3);
  

  // $query->bindParam(':Total', $tipe);
  // $query->bindParam(':Total_page', $halaman);
  // $query->bindParam(':ISBN', $isbn);
  // $query->bindParam(':Jumlah_copy', $jumlah);
  // $query->bindParam(':Location', $lokasi);
  // $query->bindParam(':Status', $status);
  // $query->bindParam(':Photo', $photo);

  try {
    
    $query->execute();

    if ($book1) {
      $query2->execute();
    }
    
    if ($book2) {
      $query3->execute();
    }
    
    if($book3){
      // $query3->execute();
      $query4->execute();
    }
    session_start();
    $_SESSION['succes'] = 'Proses pengembalian berhasil';
    header('Location: index.php');
  } catch (PDOException $e) {
    // die($e->getMessage());
    if ($e->errorInfo[1] == 1062) { // 1062 adalah kode error untuk duplicate entry
       session_start();
       $_SESSION['error'] = 'Id yang anda input sudah ada.';
       header('Location: index.php');
     }
     else if (empty($id)) {
       session_start();
      $_SESSION['error'] = 'Data id tidak boleh kosong.';
       header('Location: index.php'); 
     }
     else if ($e->errorInfo[1] == 1366) { 
       session_start();
       $_SESSION['error'] = 'ID Buku harus angka.';
       header('Location: index.php');
     }
     else if ($e->errorInfo[1] == 1452) { 
       session_start();
       $_SESSION['error'] = 'ID Anggota atau ID Buku yang Anda masukan belum terdaftar';
       header('Location: index.php');
     }
  }
}
 
?>

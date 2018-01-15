<?php
try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=siperpustakaan','root','1998');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare('SELECT * FROM borrow_transaction join borrow_trans_dtl on borrow_trans_dtl.Trans_id = borrow_transaction.Trans_id join book on borrow_trans_dtl.Book_Id = book.Book_Id join anggota on borrow_transaction.Anggota_id = anggota.username join return_transaction on anggota.username = return_transaction.Anggota_id order by Date_of_load desc');


$query->execute();

$daftar_koleksi = $query->fetchAll(PDO::FETCH_OBJ);

require ('index.view.php')
 ?>


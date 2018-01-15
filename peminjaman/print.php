<?php
// memanggil library FPDF
require('../assets/phpfpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L','mm','A3');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 

$pdf->Cell(0,20, "LAPORAN DATA PEMINJAMAN", 0, 1, 'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(255,0,0);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);

// $pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
$pdf->Cell(40,5,'Tanggal Pinjam',1,0,"C", true);
$pdf->Cell(40,5,'Tanggal Kembali',1,0,"C", true);
$pdf->Cell(25,5,'ID Transaksi',1,0,"C", true);
$pdf->Cell(25,5,'ID Anggota',1,0,"C", true);
$pdf->Cell(30,5,'Nama Anggota',1,0,"C", true);
$pdf->Cell(20,5,'ID Buku',1,0,"C", true);
$pdf->Cell(112,5,'Judul Buku',1,0,"C", true);
$pdf->Cell(40,5,'Update Terakhir',1,1,"C", true);

// $pdf->Ln();

$pdf->SetFont('Arial','',10);
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);

$host       = "localhost";
$user       = "root";
$password   = "1998";
$database   = "siperpustakaan";
$connect    = mysqli_connect($host, $user, $password, $database);

$query = "SELECT * FROM borrow_transaction join borrow_trans_dtl on borrow_trans_dtl.Trans_id = borrow_transaction.Trans_id join book on borrow_trans_dtl.Book_Id = book.Book_Id join anggota on borrow_transaction.Anggota_id = anggota.username join return_transaction on anggota.username = return_transaction.Anggota_id order by Date_of_load desc";
$sql = mysqli_query ($connect, $query);
$data = array();
while ($row = mysqli_fetch_assoc($sql)) {
    $pdf->Cell(40,5,$row['Date_of_load'],1,0,"C", false);
    $pdf->Cell(40,5,$row['Return_date'],1,0,"C", false);
    $pdf->Cell(25,5,$row['Trans_id'],1,0,"C", false);
    $pdf->Cell(25,5,$row['Anggota_id'],1,0,"C", false);
    $pdf->Cell(30,5,$row['nama'],1,0,"C", false);
    $pdf->Cell(20,5,$row['Book_id'],1,0,"C", false);
    $pdf->Cell(112,5,$row['Title'],1,0,"C", false);
    $pdf->Cell(40,5,$row['Last_update'],1,1,"C", false);
    
}




$pdf->Output();
?>

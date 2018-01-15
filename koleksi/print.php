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

$pdf->Cell(0,20, "LAPORAN DATA BUKU", 0, 1, 'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(255,0,0);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);

// $pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
$pdf->Cell(7,5,'ID',1,0,"C", true);
$pdf->Cell(112,5,'Judul',1,0,"C", true);
$pdf->Cell(49,5,'Pengarang',1,0,"C", true);
$pdf->Cell(55,5,'Penerbit',1,0,"C", true);
$pdf->Cell(15,5,'Tahun',1,0,"C", true);
$pdf->Cell(25,5,'Tipe Buku',1,0,"C", true);
$pdf->Cell(17,5,'Halaman',1,0,"C", true);
$pdf->Cell(28,5,'ISBN',1,0,"C", true);
$pdf->Cell(28,5,'Jumlah Buku',1,0,"C", true);
$pdf->Cell(20,5,'Status',1,0,"C", true);
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

$query = "SELECT * FROM book";
$sql = mysqli_query ($connect, $query);
$data = array();
while ($row = mysqli_fetch_assoc($sql)) {
    $pdf->Cell(7,5,$row['Book_id'],1,0,"C", false);
    $pdf->Cell(112,5,$row['Title'],1,0,"C", false);
    $pdf->Cell(49,5,$row['Author'],1,0,"C", false);
    $pdf->Cell(55,5,$row['Publisher'],1,0,"C", false);
    $pdf->Cell(15,5,$row['Tahun_terbit'],1,0,"C", false);
    $pdf->Cell(25,5,$row['Type'],1,0,"C", false);
    $pdf->Cell(17,5,$row['Total_page'],1,0,"C", false);
    $pdf->Cell(28,5,$row['ISBN'],1,0,"C", false);
    $pdf->Cell(28,5,$row['Jumlah_copy'],1,0,"C", false);
    $pdf->Cell(20,5,$row['Status'],1,0,"C", false);
    $pdf->Cell(40,5,$row['Last_update'],1,1,"C", false);
    
}




$pdf->Output();
?>

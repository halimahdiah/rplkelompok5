<?php
// memanggil library FPDF
require('../assets/phpfpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L','mm','A3');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',21);
// mencetak string 

$pdf->Cell(0,20, "LAPORAN ANGGOTA PERPUSTAKAAN", 0, 1, 'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',14);
$pdf->SetFillColor(255,0,0);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);

// $pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
$pdf->Cell(30,7,'ID',1,0,"L", true);
$pdf->Cell(78,7,'Nama',1,0,"L", true);
$pdf->Cell(38,7,'Jenis Kelamin',1,0,"L", true);
$pdf->Cell(35,7,'Tempat Lahir',1,0,"L", true);
$pdf->Cell(35,7,'Tanggal Lahir',1,0,"L", true);
$pdf->Cell(40,7,'Alamat',1,0,"L", true);
$pdf->Cell(40,7,'Nomor Telepon',1,0,"L", true);
$pdf->Cell(35,7,'Pekerjaan',1,0,"L", true);
$pdf->Cell(48,7,'Email',1,1,"L", true);

// $pdf->Ln();

$pdf->SetFont('Arial','',12);
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);

$host       = "localhost";
$user       = "root";
$password   = "fernandy21";
$database   = "siperpustakaan";
$connect    = mysqli_connect($host, $user, $password, $database);

$query = "SELECT * FROM anggota";
$sql = mysqli_query ($connect, $query);
$data = array();
while ($row = mysqli_fetch_assoc($sql)) {
    $pdf->Cell(30,7,$row['username'],1,0,"L", false);
    $pdf->Cell(78,7,$row['nama'],1,0,"L", false);
    $pdf->Cell(38,7,$row['jk'],1,0,"L", false);
    $pdf->Cell(35,7,$row['tempat_lahir'],1,0,"L", false);
    $pdf->Cell(35,7,$row['tanggal_lahir'],1,0,"L", false);
    $pdf->Cell(40,7,$row['alamat'],1,0,"L", false);
    $pdf->Cell(40,7,$row['telepon'],1,0,"L", false);
    $pdf->Cell(35,7,$row['pekerjaan'],1,0,"L", false);
    $pdf->Cell(48,7,$row['email'],1,1,"L", false);

}




$pdf->Output();
?>

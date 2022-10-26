<?php
include('koneksi/koneksi.php');
require('./vendor/autoload.php');

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$laptop = mysqli_query($koneksi, "SELECT * FROM laptop");
$kodeHtml = '<style>th,td {
        padding : 5px; } </style>
    <table class="table table-striped" border=1>
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Laptop</th>
        <th>Merek</th>
        <th>Spesifikasi</th>
        <th>Harga</th>
    </tr>
    </thead>';
$number = 1;
$kodeHtml .= "<tbody>";
while ($a = mysqli_fetch_array($laptop)) {
    $kodeHtml .= "<tr>
                <td>" . $number++ . "</td>
                <td>" . $a['nama'] . "</td>
                <td>" . $a['merk'] . "</td>
                <td>" . $a['spesifikasi'] . "</td>
                <td>" . $a['harga'] . "</td>
                </tr>";
}
$kodeHtml .= "</tbody>";
$kodeHtml .= "</table>";
// print_r($kodeHtml);
// exit;
$dompdf->loadHtml($kodeHtml);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream(
    'Data Laptop.pdf',
    array(
      'Attachment' => 0
    )
  );
                
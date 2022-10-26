<?php
include('koneksi/koneksi.php');
include('vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $query = $koneksi->query('SELECT no, nama,merk, spesifikasi, harga FROM laptop ');


    $spreadsheet = new Spreadsheet();
    $excel = $spreadsheet->getActiveSheet();

    $data[] = ['Nomor', 'Nama Laptop','Merek,', 'Spesifikasi', 'Harga'];

    if($query->num_rows > 0){

        while($row = $query->fetch_assoc()) {
            $data[] = [
                $row['no'],
                $row['nama'],
                $row['merk'],
                $row['spesifikasi'],
                $row['harga']
            ];
        }

    }

    $excel->fromArray($data);
    
    // redirect output to client browser
    header('Content-Disposition: attachment;filename="myfile.xlsx"');
    header('Cache-Control: max-age=0');

    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
?>
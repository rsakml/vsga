<?php
include 'koneksi/koneksi.php';

$nama = $_POST['nama'];
$merk = $_POST['merk'];
$spesifikasi = $_POST['spesifikasi'];
$harga = $_POST['harga'];
$action = $_POST['action'];



function tambah_data($koneksi, $nama, $merk, $spesifikasi, $harga)
{
    $ins = "INSERT INTO laptop(nama,merk,spesifikasi,harga) VALUES ('$nama','$merk','$spesifikasi', '$harga')";
    return $koneksi->query($ins);
}

function edit_data($koneksi, $no, $nama, $merk, $spesifikasi, $harga)
{
    $upd = "UPDATE laptop 
            SET    nama = '$nama',
            merk = '$merk',
                   spesifikasi = '$spesifikasi',
                   harga = '$harga' 
            WHERE  no='$no'";
    return $koneksi->query($upd);
}

if (strtolower($action) == 'tambah') {
    $check = tambah_data($koneksi, $nama, $merk, $spesifikasi, $harga);
    if ($check) {
        header('Location:index.php');
    } else {
        echo 'Data gagal ditambah';
    }
}
if (strtolower($action) == 'edit') {
    $no = $_GET['no'];
    $check = edit_data($koneksi, $no, $nama, $merk, $spesifikasi, $harga);
    if ($check) {
        header('Location:index.php');
    } else {
        echo 'Data gagal diedit';
    }
}
?>
<a href="index.php">Kembali</a>
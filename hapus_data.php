<?php
include 'koneksi/koneksi.php';

$no= $_GET['no'];

function hapus_data($koneksi, $no){
    $del = "DELETE FROM laptop WHERE no=$no";
    return $koneksi->query($del);
}

$check=hapus_data($koneksi,$no);
    if($check){
        header('Location:index.php');
    }else{
        echo 'Data gagal dihapus';
}
?>
<br>
<a href="index.php">Kembali</a
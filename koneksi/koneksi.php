<?php

$hostname = "localhost";
$username = "root";
$password = "";
$nama_database = "vsga";
//error_reporting(0);
// $koneksi = mysqli_connect($hostname, $username, $password, $nama_database);
$koneksi = new mysqli($hostname, $username, $password, $nama_database);//oriented
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
    exit();
  }
?>
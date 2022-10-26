<?php
include('koneksi/koneksi.php');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$password1 = password_hash($password,PASSWORD_DEFAULT); //jika ingin dienkripsi

$sql= "INSERT INTO `users` ( `username`, `email`, `password`) VALUES ( '".$username."', '".$email."', '".$password."')";
if ($koneksi->query($sql) === TRUE) {
	header('Location:login.php');
  } else {
	echo "Error: " . $sql . "<br>" . $koneksi->error;
  }
  
  $koneksi->close();
?>
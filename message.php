<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];

// menginput data ke database
mysqli_query($koneksi,"insert into message values
	('', '$nama', '$email','$subjek', '$pesan')");

// mengalihkan halaman kembali ke index.php
header("location:index.html");

?>
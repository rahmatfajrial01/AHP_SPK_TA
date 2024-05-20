<?php
include 'config.php';

$nama = $_POST['nama'];
// $jabatan = $_POST['jabatan'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "INSERT INTO users (nama, username, password) VALUES ('$nama', '$username', '$password')") or die(mysqli_error($koneksi));

if ($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='user.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

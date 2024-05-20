<?php
include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
// $jabatan = $_POST['jabatan'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "UPDATE users SET nama='$nama', username='$username', password='$password' WHERE id='$id'") or die(mysqli_error());

if ($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='user.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

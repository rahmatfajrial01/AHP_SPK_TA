<?php
include 'config.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM users WHERE id = '$id'") or die(mysqli_error($koneksi));
if ($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='user.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='user.php';</script>";
}

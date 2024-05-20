<?php
include 'config.php';

$nama = $_POST['nama'];


$query = mysqli_query($koneksi, "INSERT INTO kriteria (nama) VALUES ('$nama')") or die(mysqli_error($koneksi));

if ($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='kriteria.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

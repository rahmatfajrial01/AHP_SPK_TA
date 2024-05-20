<?php
include 'config.php';

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$nohp = $_POST['kecamatan'];
// $usia = $_POST['usia'];
// $alamat = $_POST['alamat'];
// $tunjangananak = $_POST['tunjangananak'];
// $pendapatan = $_POST['pendapatan'];
// $pekerjaan = $_POST['pekerjaan'];
// $statuskawin = $_POST['statuskawin'];
$jumlahpinjaman = $_POST['nagari'];

// $nama_dokumen   = $_FILES['bukti']['name'];
// $sumber = $_FILES['bukti']['tmp_name'];
// $pindah = move_uploaded_file($sumber, "gambar/$nama_dokumen");

$query = mysqli_query($koneksi, "INSERT INTO calon_penerima(nama,nik,kecamatan,nagari) VALUES ('$nama','$nik','$nohp','$jumlahpinjaman')") or die(mysqli_error($koneksi));

if ($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='calon_penerima.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

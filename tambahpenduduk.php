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
$usia = $_POST['usia'];
$pendidikan = $_POST['pendidikan'];
$pendapatan = $_POST['pendapatan'];
$tanggungan = $_POST['tanggungan'];
$pekerjaan = $_POST['pekerjaan'];

// $nama_dokumen   = $_FILES['bukti']['name'];
// $sumber = $_FILES['bukti']['tmp_name'];
// $pindah = move_uploaded_file($sumber, "gambar/$nama_dokumen");

$query = mysqli_query($koneksi, "INSERT INTO calon_penerima(nama,nik,kecamatan,nagari,usia,pendidikan,pendapatan,tanggungan,pekerjaan) VALUES ('$nama','$nik','$nohp','$jumlahpinjaman','$usia','$pendidikan','$pendapatan','$tanggungan','$pekerjaan')") or die(mysqli_error($koneksi));

if ($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='calon_penerima.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

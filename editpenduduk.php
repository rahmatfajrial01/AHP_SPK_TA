<?php
include 'config.php';

$id = $_POST['id'];
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

$query = mysqli_query($koneksi, "UPDATE calon_penerima SET nama='$nama', nik='$nik', kecamatan='$nohp', nagari='$jumlahpinjaman' , usia='$usia' , pendidikan='$pendidikan' , pendapatan='$pendapatan' , tanggungan='$tanggungan' , pekerjaan='$pekerjaan' WHERE id='$id'") or die(mysqli_error());

if ($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='calon_penerima.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
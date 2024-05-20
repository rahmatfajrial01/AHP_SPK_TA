<?php
session_start();
include('config.php');
include('fungsi.php');

if (!$_SESSION['username']) {
	header("location:login.php");
}
include('header.php');


?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary"></h6>
		<br>
	</div>
	<div class="card-body">

<section class="content">
	<h1 class="ui header">Form Tambah Calon Penerima  </h1>

	<form class="ui form" method="post" action="tambahpenduduk.php" enctype="multipart/form-data">
		<table class="ui fixed table" autocomplete="off">
			<div class="inline field">
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" placeholder="Nama" required class="form-control"> </td>
				</tr>

				<tr>
					<td>Nomor Induk Kependudukan</td>
					<td><input type="text" name="nik" placeholder="Masukkan NIK" required class="form-control"></td>
				</tr>

				<!-- <tr>
					<td>Usia</td>
					<td><input type="number" name="usia" placeholder="Masukkan Usia" required class="form-control"></td>
				</tr> -->

				<tr>
					<td>Kecamatan</td>
					<td><input type="text" name="kecamatan" placeholder="Masukkan Kecamatan" required class="form-control"></td>
				</tr>

				<!-- <tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" placeholder="Alamat Penduduk" required class="form-control"></td>
				</tr>

				<tr>
					<td>Status Pernikahan</td>
					<td>
						<select id="statuskawin" name="statuskawin" required class="form-select">
							<option value="">Silahkan Pilih Status Pernikahan</option>
							<option value="belum">Belum Menikah</option>
							<option value="sudah">Sudah Menikah</option>
							<option value="janda">Janda</option>
							<option value="duda">Duda</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Tunjangan Anak</td>
					<td><input type="number" name="tunjangananak" placeholder="Jumlah Tunjangan Anak" required class="form-control"></td>
				</tr>

				<tr>
					<td>Pekerjaan</td>
					<td><input type="text" name="pekerjaan" placeholder="Pekerjaan" required class="form-control"></td>
				</tr>

				<tr>
					<td>Jumlah Pendapatan</td>
					<td><input type="number" name="pendapatan" placeholder="Jumlah Pendapatan" required class="form-control"></td>
				</tr> -->

				<tr>
					<td>Nagari</td>
					<td><input type="text" name="nagari" placeholder="Masukkan Nagari" required class="form-control"></td>
				</tr>


				<!-- <tr>
					<td>Bukti</td>
					<td>
						<input type="file" class="form-control" name="bukti">
					</td>
				</tr> -->

			</div>
			<br>

		</table>
		<input class="btn btn-primary" style="float: right;" type="submit" name="tambah" value="SIMPAN">
	</form>



</section>

</div>
		</div>
	</div>

<?php
include('footer.php');

?>
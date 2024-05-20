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
	<h1 class="ui header">Form Edit Calon Penerima</h1>

	<form class="ui form" autocomplete="off" method="post" action="editpenduduk.php" enctype="multipart/form-data">
		<?php
		$id = $_GET['id'];
		$query = mysqli_query($koneksi, "SELECT * FROM calon_penerima WHERE id = '$id'") or die(mysqli_error($koneksi));
		$data = mysqli_fetch_array($query);
		?>
		<table class="ui fixed table">
			<div class="inline field">
				<tr>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<td>Nama</td>
					<td><input type="text" name="nama" placeholder="Nama" required value="<?php echo $data['nama'] ?>" class="form-control"> </td>
				</tr>

				<tr>
					<td>Nomor Induk Kependudukan</td>
					<td><input type="text" value="<?php echo $data['nik'] ?>" name="nik" placeholder="Masukkan NIK" required class="form-control"></td>
				</tr>

				<!-- <tr>
					<td>Usia</td>
					<td><input type="number" name="usia" value="<?php echo $data['usia'] ?>" placeholder="Masukkan Usia" required class="form-control"></td>
				</tr> -->

				<tr>
					<td>Kecamatan</td>
					<td><input type="text" value="<?php echo $data['kecamatan'] ?>" name="kecamatan" placeholder="Masukkan Kecamatan" required class="form-control"></td>
				</tr>

				<!-- <tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" placeholder="Alamat Penduduk" required value="<?php echo $data['alamat'] ?>" class="form-control"></td>
				</tr>

				<tr>
					<td>Status Pernikahan</td>
					<td>
						<select id="statuskawin" name="statuskawin" required class="form-select">
							<option value="">Silahkan Pilih Status Menikah</option>
							<?php if ($data['statuskawin'] == "belum") {
								echo "<option value='belum' selected>Belum Menikah</option>";
								echo "<option value='sudah'>Sudah Menikah</option>";
								echo "<option value='janda'>Janda</option>";
								echo "<option value='duda'>Duda</option>";
							} elseif ($data['statuskawin'] == "sudah") {
								echo "<option value='belum'>Belum Menikah</option>";
								echo "<option value='sudah' selected>Sudah Menikah</option>";
								echo "<option value='janda'>Janda</option>";
								echo "<option value='duda'>Duda</option>";
							} elseif ($data['statuskawin'] == "janda") {
								echo "<option value='belum'>Belum Menikah</option>";
								echo "<option value='sudah'>Sudah Menikah</option>";
								echo "<option value='janda' selected>Janda</option>";
								echo "<option value='duda'>Duda</option>";
							} else {
								echo "<option value='belum'>Belum Menikah</option>";
								echo "<option value='sudah'>Sudah Menikah</option>";
								echo "<option value='janda'>Janda</option>";
								echo "<option value='duda' selected>Duda</option>";
							}
							?>
						</select>
					</td>
				</tr>

				<tr>
					<td>Tunjangan Anak</td>
					<td><input type="number" name="tunjangananak" value="<?php echo $data['tunjangananak'] ?>" placeholder="Jumlah Tunjangan Anak" required class="form-control"></td>
				</tr>

				<tr>
					<td>Pekerjaan</td>
					<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>" placeholder="Pekerjaan" required class="form-control"></td>
				</tr>

				<tr>
					<td>Jumlah Pendapatan</td>
					<td><input type="number" name="pendapatan" placeholder="Jumlah Pendapatan" required value="<?php echo $data['pendapatan'] ?>" class="form-control"></td>
				</tr> -->

				<tr>
					<td>Nagari</td>
					<td><input type="text" name="nagari" placeholder="Masukkan Nagari" required value="<?php echo $data['nagari'] ?>" class="form-control"></td>
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
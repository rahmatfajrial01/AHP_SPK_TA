<?php
session_start();
include('config.php');
include('fungsi.php');

if (!$_SESSION['username']) {
	header("location:login.php");
}

// mendapatkan data edit
if (isset($_GET['jenis'])) {
	$jenis	= $_GET['jenis'];
}

if (isset($_POST['tambah'])) {
	$jenis	= $_POST['jenis'];
	$nama 	= $_POST['nama'];

	tambahData($jenis, $nama);

	header('Location: ' . $jenis . '.php');
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
	<h2>Tambah <?php echo $jenis ?></h2>

	<form class="ui form" method="post" action="tambah.php">
		<div class="inline field">
			<label>Nama <?php echo $jenis ?></label>
			<select name="nama" class="form-select" required>
				<option value="">Pilih Alternatif</option>
				<?php
				$sql = mysqli_query($koneksi, "SELECT * FROM calon_penerima");
				while ($r = mysqli_fetch_assoc($sql)) {
				?>
					<option value="<?= $r['id'] ?>"><?= $r['nama'] ?></option>
				<?php } ?>
			</select>
			<!-- <input type="text" name="nama" placeholder="<?php echo $jenis ?> baru" class="form-control"> -->
			<input type="hidden" name="jenis" value="<?php echo $jenis ?>">
		</div>
		<br>
		<input class="ui green button" type="submit" name="tambah" value="SIMPAN">
	</form>
</section>

</div>
		</div>
	</div>

<?php include('footer.php'); ?>
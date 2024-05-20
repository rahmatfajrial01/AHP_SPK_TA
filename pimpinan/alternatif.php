<?php
session_start();

include('config.php');
include('fungsi.php');
if (!$_SESSION['username']) {
	header("location:login.php");
}


// menjalankan perintah edit
if (isset($_POST['edit'])) {
	$id = $_POST['id'];

	header('Location: edit.php?jenis=alternatif&id=' . $id);
	exit();
}

// menjalankan perintah delete
if (isset($_POST['delete'])) {
	$id = $_POST['id'];
	deleteAlternatif($id);
}

// menjalankan perintah tambah
if (isset($_POST['tambah'])) {
	$nama = $_POST['nama'];
	tambahData('alternatif', $nama);
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

	<h2 class="ui header">Alternatif</h2>

	<a href="tambah.php?jenis=alternatif" class="btn btn-primary">
		Tambah
	</a>
<br><br>
	<table class="table table-bordered">
		<thead class="bg-primary text-white">
			<tr>
				<th class="collapsing">No</th>
				<th colspan="2">Nama Alternatif</th>
			</tr>
		</thead>
		<tbody>

			<?php
			// Menampilkan list alternatif
			$query = "SELECT id,nama FROM alternatif ORDER BY id";
			$result	= mysqli_query($koneksi, $query);

			$i = 0;
			while ($row = mysqli_fetch_array($result)) {
				$i++;
			?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td class="right aligned collapsing">
						<form method="post" action="alternatif.php">
							<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
							<button type="submit" name="edit" class="btn btn-success" style="background-color: green; color: #fff;">EDIT</button>
							<button type="submit" name="delete" class="btn btn-danger" style="background-color: maroon; color: #fff;">DELETE</button>
						</form>
					</td>
				</tr>

			<?php } ?>

		</tbody>
	</table>

	<br>


	<form action="bobot_kriteria.php">
		<button class="btn btn-success" style="float: right; background-color: green; color: #fff;">
			<i class="right arrow icon"></i>
			Lanjut
		</button>
	</form>
</section>

</div>
		</div>
	</div>

<?php include('footer.php'); ?>
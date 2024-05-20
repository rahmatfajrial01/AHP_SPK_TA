<?php
session_start();

include('config.php');
include('fungsi.php');

if (!$_SESSION['username']) {
	header("location:login.php");
}

// mendapatkan data edit
if (isset($_GET['jenis']) && isset($_GET['id'])) {
	$id 	= $_GET['id'];
	$jenis	= $_GET['jenis'];

	// hapus record
	$query 	= "SELECT nama FROM $jenis WHERE id=$id";
	$result	= mysqli_query($koneksi, $query);

	while ($row = mysqli_fetch_array($result)) {
		$nama = $row['nama'];
	}
}

if (isset($_POST['update'])) {
	$nama = $_POST['nama'];
	$id = $_POST['id'];
	$jenis = $_POST['jenis'];
	$update = $koneksi->query("UPDATE $jenis SET nama='$nama' WHERE id='$id'");
	if($update){
		echo"<script>alert('Kriteria Berhasil Di Update')
		window.location='./kriteria.php'
		</script>
		";
	}else{
		echo"
		<script>
		alert('Kriteria Gagal Di Update')
		history.back()
		</script>
		";
	}
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
	<h2>Edit <?php echo $jenis ?></h2>

	<form class="ui form" method="post" action="edit.php">
		<div class="inline field">
			<label>Nama <?php echo $jenis ?></label>
			<input type="text" name="nama" value="<?php echo $nama ?>">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<input type="hidden" name="jenis" value="<?php echo $jenis ?>">
		</div>
		<br>
		<input class="ui green button" type="submit" name="update" value="UPDATE">
	</form>
</section>


</div>
		</div>
	</div>

<?php include('footer.php'); ?>
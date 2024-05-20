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
	<h1 class="ui header">Form Edit Data User</h1>

	<form class="ui form" autocomplete="off" method="post" action="edituser.php">
		<?php
		$id = $_GET['id'];
		$query = mysqli_query($koneksi, "SELECT * FROM users WHERE id = '$id'") or die(mysqli_error($koneksi));
		$data = mysqli_fetch_array($query);
		?>
		<table class="ui fixed table">
			<div class="inline field">
				<tr>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<td>Nama</td>
					<td><input type="text" name="nama" placeholder="Nama User" required value="<?php echo $data['nama'] ?>" class="form-control"> </td>
				</tr>

				<tr>
					<td>Username</td>
					<td><input type="username" value="<?php echo $data['username'] ?>" name="username" placeholder="Masukkan Username" required class="form-control"></td>
				</tr>
				<tr>
					<td>jabatan</td>
					<td><input type="jabatan" value="<?php echo $data['jabatan'] ?>" name="jabatan" placeholder="Masukkan jabatan" required class="form-control"></td>
				</tr>

				<tr>
					<td>Password</td>
					<td><input type="password" value="<?php echo $data['password'] ?>" name="password" placeholder="Masukkan Password" required class="form-control"></td>
				</tr>
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
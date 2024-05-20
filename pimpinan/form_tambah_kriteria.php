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
	<h1 class="ui header">Form Tambah kriteria </h1>

	<form class="ui form" method="post" action="tambahkriteria.php">
		<table class="ui fixed table" autocomplete="off">
			<div class="inline field">
				<tr>
					<td>kriteria</td>
					<td><input type="text" name="nama" placeholder="Nama kriteria" required class="form-control"> </td>
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
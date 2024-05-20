<?php
session_start();
include('config.php');
include('fungsi.php');
if (!$_SESSION['username']) {
	header("location:login.php");
}

include('header.php');

?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/jquery-3.5.1.js"></script>
<link rel="stylesheet" type="text/css" href="datatable/datatables.css">
<script src="datatable/datatables.js"></script>

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

	<h3 class="ui header">Data User</h3>
	<div>
		<a class="btn btn-primary" href="form_tambah_user.php"><i class="plus icon"></i>Tambah User</a>
		<br><br>
		<div class="table-responsive" style="overflow-x: auto;">
			<table class="table table-bordered">
				<thead>
					<tr class="bg-primary text-white">
						<th>No</th>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Username</th>
						<th>Password</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include "config.php";

					$query = mysqli_query($koneksi, "SELECT * FROM users") or die(mysqli_error($koneksi));
					$nomor = 1;
					while ($data = mysqli_fetch_array($query)) { ?>
						<tr>
							<td align="center"><?php echo $nomor++; ?>.</td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['jabatan']; ?></td>
							<td><?php echo $data['username']; ?></td>
							<td><?php echo $data['password']; ?></td>
							<td align="center">
								<div class="">
									<a class="btn btn-success" style="background-color: green; color: #fff;" href="form_edit_user.php?id=<?php echo $data['id']; ?>">Edit</a><br><br>
									<a class="btn btn-danger" style="background-color: maroon; color: #fff;" href="proses_hapus_user.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin hapus data?')">Hapus</a>
								</div>
							</td>
						</tr>
					<?php
					} ?>
				<tbody>
			</table>
		</div>
	</div>
	<br>
	<br>
	<!-- 	
	<a class="ui left floated small brown labeled icon button" href="form_filter.php"><i class="filter icon"></i>Filter</a> -->
</section>


			</div>
		</div>
	</div>


<script src="js/jquery-3.2.1.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="datatable/datatables/js/jquery.dataTables.js"></script>
<script src="datatable/datatables/js/dataTables.jqueryui.js"></script>
<script src="datatable/datatables/js/dataTables.dataTables.js"></script>
<script src="datatable/datatables/js/dataTables.foundation.js"></script>

<script>
	$.fn.dataTable.ext.search.push(
		function(settings, data, dataIndex) {
			var min = parseInt($('#min').val(), 10);
			var max = parseInt($('#max').val(), 10);
			var age = parseFloat(data[10]) || 0; // use data for the age column

			if ((isNaN(min) && isNaN(max)) ||
				(isNaN(min) && age <= max) ||
				(min <= age && isNaN(max)) ||
				(min <= age && age <= max)) {
				return true;
			}
			return false;
		}
	);

	$(document).ready(function() {
		$('#penduduks').DataTable();

		$('#min, #max').keyup(function() {
			table.draw();
		});
	});
</script>
<?php
include('footer.php');

?>
<?php
session_start();

include('config.php');
include('fungsi.php');
if (!$_SESSION['username']) {
	header("location:login.php");
}

$jenis = $_GET['c'];

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
	<h2 class="ui header">Perbandingan Alternatif &rarr; <?php echo getKriteriaNama($jenis - 1) ?></h2>
	<?php showTabelPerbandingan($jenis, 'alternatif'); ?>
</section>


</div>
		</div>
	</div>

<?php include('footer.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Sistem Pendukung Keputusan metode AHP</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/tambahan.css">
	<link rel="stylesheet" type="text/css" href="datatable/datatables.css">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">

</head>

<body>
	<header>
		<h1>
			<marquee style="float: right;" behaviour="alternate" scrolldelay="-500" scrollamount="10">IMPLEMENTASI METODE AHP PADA SISTEM PENDUKUNG KEPUTUSAN PEMBERI JUMLAH PINJAMAN KEPADA CALON NASABAH BUMnag</marquee>
		</h1>
	</header>

	<div class="wrapper">
		<nav id="navigation" role="navigation">
			<ul>
				<li><a class="item" href="index.php">Home</a></li>
				<li><a class="item" href="user.php">Data User</a></li>
				<li><a class="item" href="nasabah.php">Data Calon Nasabah</a></li>
				<li><a class="item" href="ahp.php">Apa itu AHP?</a></li>
				<li>
					<a class="item" href="kriteria.php">Kriteria
						<div class="ui blue tiny label" style="float: right;"><?php echo getJumlahKriteria(); ?></div>
					</a>
				</li>
				<li>
					<a class="item" href="alternatif.php">Alternatif
						<div class="ui blue tiny label" style="float: right;"><?php echo getJumlahAlternatif(); ?></div>
					</a>
				</li>
				<li><a class="item" href="bobot_kriteria.php">Perbandingan Kriteria</a></li>
				<li><a class="item" href="bobot.php?c=1">Perbandingan Alternatif</a></li>
				<ul>
					<?php

					if (getJumlahKriteria() > 0) {
						for ($i = 0; $i <= (getJumlahKriteria() - 1); $i++) {
							echo "<li><a class='item' href='bobot.php?c=" . ($i + 1) . "'>" . getKriteriaNama($i) . "</a></li>";
						}
					}

					?>
				</ul>
				<li><a class="item" href="laporan.php">Laporan</a></li>
				<li><a class="item" href="logout.php">Log out</a></li>

			</ul>
		</nav>
		<script src="datatable/datatables.js"></script>
		<script src="js/jquery-3.2.1.js"></script>
		<script src="datatable/datatables/js/jquery.dataTables.js"></script>
		<script src="js/jquery-3.6.0.min.js"></script>
		<script src="datatable/datatables/js/dataTables.jqueryui.js"></script>
		<script src="datatable/datatables/js/dataTables.dataTables.js"></script>
		<script src="datatable/datatables/js/dataTables.foundation.js"></script>
		<script>
			$(document).ready(function() {
				$('penduduks').DataTable();
			});
		</script>
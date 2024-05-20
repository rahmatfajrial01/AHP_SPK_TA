<?php
session_start();
include('config.php');
include('fungsi.php');
if (!$_SESSION['username']) {
	header("location:login.php");
}


// menghitung perangkingan
$jmlKriteria 	= getJumlahKriteria();
$jmlAlternatif	= getJumlahAlternatif();
$nilai			= array();

// mendapatkan nilai tiap alternatif
for ($x = 0; $x <= ($jmlAlternatif - 1); $x++) {
	// inisialisasi
	$nilai[$x] = 0;

	for ($y = 0; $y <= ($jmlKriteria - 1); $y++) {
		$id_alternatif 	= getAlternatifID($x);
		$id_kriteria	= getKriteriaID($y);

		$pv_alternatif	= getAlternatifPV($id_alternatif, $id_kriteria);
		$pv_kriteria	= getKriteriaPV($id_kriteria);

		$nilai[$x]	 	+= ($pv_alternatif * $pv_kriteria);
	}
}

// update nilai ranking
for ($i = 0; $i <= ($jmlAlternatif - 1); $i++) {
	$id_alternatif = getAlternatifID($i);
	$query = "INSERT INTO ranking VALUES ($id_alternatif,$nilai[$i]) ON DUPLICATE KEY UPDATE nilai=$nilai[$i]";
	$result = mysqli_query($koneksi, $query);
	if (!$result) {
		echo "Gagal mengupdate ranking";
		exit();
	}
}

?>

<body>
	<section class="content">
	<h1 style="text-align: center;font-size: 16px;line-height: 1.2;">DINAS SOSIAL</h1>
		<!-- <h2 style="text-align: center;font-size: 16px;line-height:1.2;">"Karya Bersama"</h2> -->
		<!-- <h2 style="text-align: center;font-size: 16px;">NAGARI AURDURI SURANTIH KECAMATAN SUTERA</h2> -->
		<h2 style="text-align: center;font-size: 16px;">KABUPATEN LIMA PULUH KOTA</h2>
		<h2 style="text-align: center;font-size: 16px;">PROVINSI SUMATERA BARAT</h2>
		<hr border: 50px; border-radius: 10px; border-top:20px solid black; border-bottom:20px solid black;>
			<h2 style="text-align: center;font-size: 16px;" class=" ui header">Laporan Hasil Akhir Penerima Bantuan Pangan Non Tunai</h2>
		<!-- <a href="print.php" class="btn btn-primary" target="_blank">Print</a> -->
		<br>

		<div>

			<table border="1" style="border-collapse: collapse; width:500px; text-align:center;" class="ui celled collapsing table" align="center">
				<thead>
					<tr>
						
						<th>Rangking</th>
						<th>Nama</th>
						<th>Nik</th>
						<th>Kecamatan</th>
						<th>Nagari</th>
						<th>Nilai</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query  = "SELECT id,nama,id_alternatif,nilai, nik, kecamatan, nagari FROM alternatif,ranking WHERE alternatif.id = ranking.id_alternatif ORDER BY nilai DESC";
					$result = mysqli_query($koneksi, $query);

					$i = 0;
					while ($row = mysqli_fetch_array($result)) {
						 $i++;
					?>
						<tr>
							<?php if ($i == 1) {
								echo "<td><div class=\"ui ribbon label\">Pertama</div></td>";
							} else {
								echo "<td>" . $i . "</td>";
							}

							?>
							
							
							<td><?php echo $row['nama'] ?></td>
							<td><?php echo $row['nik'] ?></td>
							<td><?php echo $row['kecamatan'] ?></td>
							<td><?php echo $row['nagari'] ?></td>
							<td><?php echo $row['nilai'] ?></td>
						</tr>

					<?php
					}


					?>
				</tbody>
			</table>
			<br>
	<h2 style="text-align:center;font-size: 12px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Kepala Dinas Sosial</h2>
			<br>
			<h2 style="text-align:center;font-size: 12px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Harmen, SH</h2>
	</section>
</body>

<script>
	window.print();
</script>
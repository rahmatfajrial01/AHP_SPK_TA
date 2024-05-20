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
	<h2 style="text-align: center;">Laporan Hasil Akhir </h2>
	<h2 style="text-align: center;">Penerima Bantuan Pangan Non Tunai</h2>
	<br>
	<!-- <a href="print.php" class="btn btn-primary" target="_blank">Print</a> -->
	                 <form action="print.php" target="_blank" method="POST" class="form-inline my-2 my-lg-0 form-right">
                     <input class="form-control mr-sm-2 "  type="search" placeholder="ketik nama..." name="keyword"  aria-label="Search">
                     <button class=" btn btn-primary my-2 my-sm-0" type="submit">Print</button>&nbsp 
					 <a href="print_khusus.php" class="btn btn-primary" target="_blank">Print Khusus Penerima Bantuan</a>&nbsp 
					 <!-- <a href="print_tes.php" class="btn btn-primary" target="_blank">Print tes</a> -->
                      </form>
	<br>
	<table class="table table-bordered">
		<thead>
			<tr class="bg-primary text-white">
			    <th>NO</th>
				
				<th>Nama</th>
				<th>Nik</th>
				<th>Kecamatan</th>
				<th>Nagari</th>
				<th>Usia</th>
						<th>Pendidikan</th>
						<th>Pendapatan</th>
						<th>J.tanggungan</th>
						<th>Pekerjaan</th>
				<th>Rangking</th>
				<th>Nilai</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$query  = "SELECT id,nama,id_alternatif,nilai, nik, kecamatan, nagari,Usia ,Pendidikan ,Pendapatan ,Tanggungan ,Pekerjaan FROM alternatif,ranking WHERE alternatif.id = ranking.id_alternatif ORDER BY nilai DESC";
			$result = mysqli_query($koneksi, $query);

			$i = 0;
			while ($row = mysqli_fetch_array($result)) {
				$i++;
			?>
				<tr>
				<td><?php echo $i; ?></td>
				
					
				
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['nik'] ?></td>
					<td><?php echo $row['kecamatan'] ?></td>
					<td><?php echo $row['nagari'] ?></td>
					<td><?php echo $row['Usia']; ?></td>
							<td><?php echo $row['Pendidikan']; ?></td>
							<td><?php echo $row['Pendapatan']; ?></td>
							<td><?php echo $row['Tanggungan']; ?></td>
							<td><?php echo $row['Pekerjaan']; ?></td>
							<?php if ($i == 1) {
						echo "<td><div>Pertama</div></td>";
						// echo "<td><div class=\"ui ribbon label\">Pertama</div></td>";
					} else {
						echo "<td>" . $i . "</td>";
					}

					?>
					<td><?php echo $row['nilai'] ?></td>
					<?php if ($i <= 2) {
						echo "<td><div class=\"\">Menerima Bantuan</div></td>";
					} else {
						echo "<td><div class=\"\">Tidak Menerima Bantuan</div></td>";
					}

					?>
					<td><a href="print_bukti.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" target="_blank">Print</a></td>
				</tr>

			<?php
			}


			?>
		</tbody>
	</table>
</section>

</div>
		</div>
	</div>

<?php include('footer.php'); ?>
<?php
session_start();
include('config.php');
include('fungsi.php');
if (!$_SESSION['username']) {
	header("location:login.php");
}




?>

		<?php
		$id = $_GET['id'];
		$query = mysqli_query($koneksi, "SELECT * FROM alternatif WHERE id = '$id'") or die(mysqli_error($koneksi));
		$data = mysqli_fetch_array($query);

     
		?>
	






<body >
	<section class="content">
        
	<h1 style="text-align: center;font-size: 16px;line-height: 1.2;">DINAS SOSIAL</h1>
		<!-- <h2 style="text-align: center;font-size: 16px;line-height:1.2;">"Karya Bersama"</h2> -->
		<!-- <h2 style="text-align: center;font-size: 16px;">NAGARI AURDURI SURANTIH KECAMATAN SUTERA</h2> -->
		<h2 style="text-align: center;font-size: 16px;">KABUPATEN LIMA PULUH KOTA</h2>
		<h2 style="text-align: center;font-size: 16px;">PROVINSI SUMATERA BARAT</h2>
		<hr border: 50px; border-radius: 10px; border-top:20px solid black; border-bottom:20px solid black;>
			<h2 style="text-align: center;font-size: 16px;" class=" ui header">Bukti Penerima Bantuan Pangan Non Tunai</h2>
		<!-- <a href="print.php" class="btn btn-primary" target="_blank">Print</a> -->
		<br>
		

        <!-- <p style="text-align:justify ;font-size: 16px;"> Berdasarkan keputusan dan pertimbangan dari Dinas Sosial Kabupaten Lima Puluh Kota Bapak/Ibu dinyatakan berhak memperoleh data Bantuan Pangan Non Tunai. 
        Harap menjadi perhatian Bapak/Ibu penerima bantuan</p>
        -->
		<div>

			<!-- <table border="1" style="border-collapse: collapse; width:500px; text-align:center;" class="ui celled collapsing table" align="center">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Nik</th>
						<th>Kecamatan</th>
						<th>Nagari</th>
						</tr>
				</thead>
				<tbody>
			        	<tr>						
						<td><?php echo $data['nama'] ?></td>
						<td><?php echo $data['nik'] ?></td>
						<td><?php echo $data['kecamatan'] ?></td>
						<td><?php echo $data['nagari'] ?></td>
						</tr>
				</tbody>
                
			</table> -->
            <!-- <p style="text-align: justify;font-size: 16px;">Harap surat ini disimpan dengan baik, karena akan digunakan sebagi bukti bagi Bapak/Ibu nantinya, Terima Kasih</p>
			<br> -->

			<table border="0" cellspacing="0" cellpadding="5" align="center" width="425">
<tr align="center" bgcolor="#1fe5d5">
<!-- <td width="200">DATA DIRI</td>
<td width="400">KETERANGAN</td> -->

</tr>
<tr>
<td>Nama</td>
<td>: <?php echo $data['nama'] ?></td>
<!-- <td rowspan="7"><img src="riski.jpeg" width="200"></td> -->
</tr>
<tr>
<td>Nik</td>
<td>: <?php echo $data['nik'] ?></td> 
</tr>
<tr>
<td>Kecamatan</td>
<td>: <?php echo $data['kecamatan'] ?></td>
</tr>
<tr>
<td>Nagari</td>
<td>: <?php echo $data['nagari'] ?></td>
</tr>
<tr>
<td>Usia</td>
<td>: <?php echo $data['Usia'] ?></td>
</tr>
<tr>
<td>Pendidikan Terakhir</td>
<td>: <?php echo $data['Pendidikan'] ?></td>
</tr>
<tr>
<td>Pendapatan</td>
<td>: <?php echo $data['Pendapatan'] ?></td>
</tr>
<tr>
<td>Jumlah tanggungan</td>
<td>: <?php echo $data['Tanggungan'] ?></td>
</tr>
<tr>
<td>Pekerjaan</td>
<td>: <?php echo $data['Pekerjaan'] ?></td>
</tr>
</table>
<br>
	<h2 style="text-align:center;font-size: 12px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Penerima &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Kepala Dinas Sosial</h2>
			<br>
			<h2 style="text-align:center;font-size: 12px;">&nbsp &nbsp &nbsp &nbsp (&nbsp <td> <?php echo $data['nama'] ?></td> &nbsp) &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp (&nbsp Harmen, SH &nbsp) </h2>
	</section>
</body>

<script>
	window.print();
</script>
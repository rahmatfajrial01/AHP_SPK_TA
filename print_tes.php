<table border="1px" style="width:100%;">
		<tr>
			<td>no</td>
			<td>nama</td>
			<td>angka</td>
			<td colspan="2">aksi</td>
		</tr>
		<?php
		include "config.php";
		$query = mysqli_query($koneksi,"SELECT * FROM  alternatif WHERE nama ='Dani Yuhendri' ") ;
		
		 $no=1; 
		while ($row =mysqli_fetch_array($query)){ ?>
		
		<tr>
			<td><?= $no++; ?></td>
			<td><?php echo $row['nama'];   ?></td>
			<td><?php echo $row['nik'];   ?></td>
			<td><a href="">edit</a></td>
			<td><a href="">hapus</a></td>
		</tr>
	<?php
	}
		?>
		
<script>
	window.print()
</script>
	</table>
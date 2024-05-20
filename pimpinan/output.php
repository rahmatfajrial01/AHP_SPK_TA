<?php
session_start();
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
	<h3 class="ui header">Matriks Perbandingan Berpasangan</h3>
	<table class="table table-bordered">
		<thead>
			<tr class="bg-primary text-white">
				<th>Kriteria</th>
				<?php
				for ($i = 0; $i <= ($n - 1); $i++) {
					echo "<th>" . getKriteriaNama($i) . "</th>";
				}
				?>
			</tr>
		</thead>
		<tbody>
			<?php
			for ($x = 0; $x <= ($n - 1); $x++) {
				echo "<tr>";
				echo "<td>" . getKriteriaNama($x) . "</td>";
				for ($y = 0; $y <= ($n - 1); $y++) {
					echo "<td>" . round($matrik[$x][$y], 5) . "</td>";
				}

				echo "</tr>";
			}
			?>
		</tbody>
		<tfoot>
			<tr>
				<th>Jumlah</th>
				<?php
				for ($i = 0; $i <= ($n - 1); $i++) {
					echo "<th>" . round($jmlmpb[$i], 5) . "</th>";
				}
				?>
			</tr>
		</tfoot>
	</table>


	<br>

	<h3 class="ui header">Matriks Nilai Kriteria</h3>
	<table class="table table-bordered">
		<thead>
			<tr class="bg-primary text-white">
				<th>Kriteria</th>
				<?php
				for ($i = 0; $i <= ($n - 1); $i++) {
					echo "<th>" . getKriteriaNama($i) . "</th>";
				}
				?>
				<th>Jumlah</th>
				<th>Priority Vector</th>
			</tr>
		</thead>
		<tbody>
			<?php
			for ($x = 0; $x <= ($n - 1); $x++) {
				echo "<tr>";
				echo "<td>" . getKriteriaNama($x) . "</td>";
				for ($y = 0; $y <= ($n - 1); $y++) {
					echo "<td>" . round($matrikb[$x][$y], 5) . "</td>";
				}

				echo "<td>" . round($jmlmnk[$x], 5) . "</td>";
				echo "<td>" . round($pv[$x], 5) . "</td>";

				echo "</tr>";
			}
			?>

		</tbody>
		<tfoot>
			<tr>
				<th colspan="<?php echo ($n + 2) ?>">Principe Eigen Vector (λ maks)</th>
				<th><?php echo (round($eigenvektor, 5)) ?></th>
			</tr>
			<tr>
				<th colspan="<?php echo ($n + 2) ?>">Consistency Index</th>
				<th><?php echo (round($consIndex, 5)) ?></th>
			</tr>
			<tr>
				<th colspan="<?php echo ($n + 2) ?>">Consistency Ratio</th>
				<th><?php echo (round(($consRatio * 100), 2)) ?> %</th>
			</tr>
		</tfoot>
	</table>

	<?php
	if ($consRatio > 0.1) {
	?>
		<div class="ui icon red message">
			<i class="close icon"></i>
			<i class="warning circle icon"></i>
			<div class="content">
				<div class="header">
					Nilai Consistency Ratio melebihi 10% !!!
				</div>
				<p>Mohon input kembali tabel perbandingan...</p>
			</div>
		</div>

		<br>

		<a href='javascript:history.back()'>
			<button class="ui left labeled icon button">
				<i class="left arrow icon"></i>
				Kembali
			</button>
		</a>

	<?php
	} else {

	?>
		<br>

		<a href="bobot.php?c=1">
			<button class="btn btn-success" style="float: right; background-color: green; color: #fff;">
				<i class="right arrow icon"></i>
				Lanjut
			</button>
		</a>

	<?php
	}
	echo "</section>";?>

	
	</div>
	</div>
</div>
<?php
	include('footer.php');
	?>
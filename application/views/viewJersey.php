<html>
<head>
	<title> Semua Jersey </title>
</head>
<body>

<h3>DATA JERSEY</h3>

<?php echo form_open('cPemesanan/tampilSemuaJersey'); ?>
<table align  = "center" border="1" cellpadding="1" cellspacing="1">
	<tr align = "center">
		<td>NO</td>
		<td>Nama Tim</td>
		<td>Jenis Jersey</td>
		<td>Bahan</td>
		<td>Ukuran</td>
		<td>Ket</td>
		<td>Stok</td>
		<td>Harga Satuan</td>
		
	</tr>
	<?php $i = 1  ?>
	<?php $total = 0 ?>
	
	<?php foreach($jersey as $item): ?>
	<tr>
		
		<td><?php echo $i++ ?></td>
		<td><?php echo $item->{"(select nama_tim from jersey a where a.kd_jersey = b.kd_jersey)"} ?></td>
		<td><?php echo $item->jenis_jersey ?></td>
		<td><?php echo $item->bahan ?></td>
		<td><?php echo $item->ukuran ?></td>
		<td><?php echo $item->ket ?></td>
		<td><?php echo $item->stok ?></td>
		<td><?php echo $item->harga ?></td>
		
	</tr>
	<?php endforeach ?>
<?php echo form_close(); ?>
</table>

</body>
</html>

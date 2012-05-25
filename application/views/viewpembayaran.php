<html>
<head>
	<title> Pembayaran </title>
</head>
<body>

<h3 align='center'>DATA Pembayaran</h3>

<?php echo form_open('cadmin/tampilpembayaran'); ?>
<table align  = "center" border="1" cellpadding="1" cellspacing="1">
	<tr align = "center">
		<td>NO</td>
		<td>ID Pesanan</td>
		<td>Nama Bank</td>
		<td>Nomor Rekening</td>
		<td>Atas Nama</td>
		<td>Tanggal Pembayaran</td>
		
	</tr>
	<?php $i = 1  ?>
	<?php $total = 0 ?>
	
	<?php foreach($bayar as $item): ?>
	<tr>
		
		<td><?php echo $i++ ?></td>
		<td><?php echo $item->ID_PESANAN?></td>
		<td><?php echo $item->NAMA_BANK ?></td>
		<td><?php echo $item->NO_REK?></td>
		<td><?php echo $item->ATAS_NAMA ?></td>
		<td><?php echo $item->TGL?></td>
		
		
	</tr>
	<?php endforeach ?>
<?php echo form_close(); ?>
</table>

</body>
</html>

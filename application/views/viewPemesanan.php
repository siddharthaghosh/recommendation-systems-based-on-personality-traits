<html>
<head>
<title>Pemesanan</title>
</head>
<body>
<form action="tampilIsiCart" method="post">
<h3 align = "center">PEMESANAN</H3>
	<h3 align = "left">NO Pemesanan Anda :
	<?php $i = 1  ?>
	<?php foreach($idpesanan as $ia): ?>
	<?php echo $ia->{"MAX(id_pesanan)+1"} ?>
	<?php $idpes = $ia->{"MAX(id_pesanan)+1"} ?>
	<?php endforeach ?>
	</h3>
	
	<table align  = "center" border="1" cellpadding="1" cellspacing="1">
		
	<tr align = "center">
		<td>NO</td>
		<td>Nama Tim</td>
		<td>Jenis Jersey</td>
		<td>Bahan</td>
		<td>Ukuran</td>
		<td>Ket</td>
		<td>Qty</td>
		<td>Harga Satuan</td>
		<td>Harga Total</td>
		
		
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
		<td><?php echo $item->qty ?></td>
		<td><?php echo $item->harga ?></td>
		<td><?php echo $item->harga*$item->qty ?></td>
		<?php $total = $total + $item->harga*$item->qty?>
		
	</tr>
	<?php endforeach ?>
	<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	
	<td>Total</td>
	<td>
	<?php echo $total ?>
	<input type="hidden" name="hargatotal" value="<?php echo $total?>" />
	<input type="hidden" name="id_pesanan" value="<?php echo $idpes?>" />
	</td>
	</tr>
	</table>
	<h3 align = "center">Masukkan Identitas Anda</h3>
	<table align ="center">
<tr valign="top">
	<td> Nama </td>
	<td> : </td>
	<td> <input type="text" name="nama"/> </td>
	
</tr>
<tr valign="top">
	<td> Alamat </td>
	<td> : </td>
	<td><input type="text" name="alamat"/></td>
</tr>
<tr valign="top">
	<td> No. Telp </td>
	<td> : </td>
	<td> <input type="text" name="no_telp"/>  </td>
</tr>
<tr>
	<td align ="right"> <input type="submit" name="submitpesan" value="confirm" /></td>
	
</tr>

</table>
</form>


</body>
</html>

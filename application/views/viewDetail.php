<html>
<head>
	<title> Detail Jersey </title>
</head>
<body>

<h2> DETAIL JERSEY </h2>
<h3 align = "center"></H3>
	<h3 align = "left">NO Pemesanan Anda :
	<?php $i = 1  ?>
	<?php foreach($idpesanan as $ia): ?>
	<?php echo $ia->{"MAX(id_pesanan)+1"} ?>
	<?php endforeach ?>
	</h3>

<?php echo form_open('cPemesanan/detailJersey'); ?>
<?php foreach($oneJersey as $item): ?>
<table>
<tr valign="top">
	<td> Kode Jersey </td>
	<td> : </td>
	<td> <?php echo $item->kd_jenis?> </td> 
	
	<input type="hidden" name="kd" value="<?php echo $item->kd_jenis?>" />
	<input type="hidden" name="id_pesanan" value="<?php echo $ia->{"MAX(id_pesanan)+1"}?>" />
	</tr>
<tr valign="top">
	<td> Nama Tim </td>
	<td> : </td>
	<td> <?php echo $item->{"(select nama_tim from jersey a where a.kd_jersey = b.kd_jersey)"} ?> </td>
</tr>
<tr valign="top">
	<td> Jenis </td>
	<td> : </td>
	<td> <?php echo $item->jenis_jersey ?> </td>
</tr>
<tr valign="top">
	<td> Bahan </td>
	<td> : </td>
	<td> <?php echo $item->bahan?></td>
</tr>
<tr valign="top">
	<td> Ket </td>
	<td> : </td>
	<td> <?php echo $item->ket?>  </td>
</tr>
<tr valign="top">
	<td> Harga </td>
	<td> : </td>
	<td> <?php echo $item->harga?></td>
</tr>
<tr valign="top">
	<td> Ukuran </td>
	<td> : </td>
	<td> <?php echo $item->ukuran?></td>
</tr>
<?php endforeach ?>

<tr valign="top">
	<td> Qty </td>
	<td> : </td>
	<td> <?php echo form_input('qty'); ?> <?php echo form_error('qty'); ?></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td> <?php echo form_submit('submit', 'Add To Cart', 'id="submit"'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>

</body>
</html>

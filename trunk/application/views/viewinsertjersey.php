<?php if(!isset($user)){
	?>
<html>
<head>
	<title> Menambah Jersey</title>
</head>
<body>

<h3> Tambah Jersey</h3>

<?php echo form_open('cadmin/insertjersey'); ?>

<table>
<tr valign="top">
	<td> Kode Jersey </td>
	<td> : </td>
	<td> <?php echo form_input('KD_JENIS'); ?> <?php echo form_error('KD_JENIS'); ?> </td>
</tr>
<tr valign="top">
	<td> Kode Jenis Jersey </td>
	<td> : </td>
	<td> <?php echo form_input('KD_JERSEY'); ?> <?php echo form_error('KD_JERSEY'); ?> </td>
</tr>
<tr valign="top">
	<td> Ukuran</td>
	<td> : </td>
	<td> <?php echo form_input('UKURAN'); ?> <?php echo form_error('UKURAN'); ?>  </td>
</tr>
<tr valign="top">
	<td> Stok</td>
	<td> : </td>
	<td> <?php echo form_input('STOK'); ?> <?php echo form_error('STOK'); ?>  </td>
</tr>
<tr valign="top">
	<td> Tipe Jersey</td>
	<td> : </td>
	<td> <?php echo form_input('JENIS_JERSEY'); ?> <?php echo form_error('JENIS_JERSEY'); ?>  </td>
</tr>
<tr valign="top">
	<td> Bahan</td>
	<td> : </td>
	<td> <?php echo form_input('BAHAN'); ?> <?php echo form_error('BAHAN'); ?>  </td>
</tr>
<tr valign="top">
	<td> Harga Satuan</td>
	<td> : </td>
	<td> <?php echo form_input('HARGA'); ?> <?php echo form_error('HARGA'); ?>  </td>
</tr>
<tr valign="top">
	<td> Keterangan</td>
	<td> : </td>
	<td> <?php echo form_input('KET'); ?> <?php echo form_error('KET'); ?>  </td>
</tr>
<tr>
	<td> <?php echo form_submit('submit', 'Simpan', 'submit'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>

</body>
</html>
<?php } ?>
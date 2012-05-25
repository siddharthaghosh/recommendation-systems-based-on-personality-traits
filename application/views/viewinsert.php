<html>
<head>
	<title> Menambah Data </title>
</head>
<body>

<h3> Tambah Data </h3>

<?php echo form_open('cinsert/tambahdata'); ?>

<table>
<tr valign="top">
	<td> NIM </td>
	<td> : </td>
	<td> <?php echo form_input('NIM'); ?> <?php echo form_error('NIM'); ?> </td>
</tr>
<tr valign="top">
	<td> Nama </td>
	<td> : </td>
	<td> <?php echo form_input('Nama'); ?> <?php echo form_error('Nama'); ?> </td>
</tr>
<tr valign="top">
	<td> IP </td>
	<td> : </td>
	<td> <?php echo form_input('IP'); ?> <?php echo form_error('IP'); ?>  </td>
</tr>
<tr>
	<td> <?php echo form_submit('submit', 'Simpan', 'id="submit"'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>

</body>
</html>

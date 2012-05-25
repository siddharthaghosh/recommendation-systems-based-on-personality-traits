<html>
<head>
	<title> Menghapus Data </title>
</head>
<body>

<h3> Hapus Data </h3>

<?php echo form_open('cdelete/deletedata'); ?>

<table>
<tr valign="top">
	<td> NIM </td>
	<td> : </td>
	<td> <?php echo form_input('NIM'); ?> <?php echo form_error('NIM'); ?> </td>
</tr>
<tr>
	<td> <?php echo form_submit('submit', 'Hapus', 'id="submit"'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>

</body>
</html>

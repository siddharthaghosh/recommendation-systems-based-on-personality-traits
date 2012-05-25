<html>
<head>
	<title> Cari Data </title>
</head>
<body>

<h3> Cari Data </h3>

<?php echo form_open('csearch/cariData'); ?>

<table>
<tr valign="top">
	<td> NIM </td>
	<td> : </td>
	<td> <?php echo form_input('NIM'); ?> <?php echo form_error('NIM'); ?> </td>
</tr>

<tr>
	<td> <?php echo form_submit('submit', 'Search', 'id="submit"'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>

</body>
</html>

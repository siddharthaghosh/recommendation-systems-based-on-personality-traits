<html>
<head>
	<title> MengUpdate Data </title>
</head>
<body>
<h3> Update Data </h3>

<?php echo form_open('cupdate/subUpdate'); ?>

<table>
<tr valign="top">
	<td> NIM </td>
	<td> : </td>
	<td>  <?php echo form_input ('nim',$nim,'id="nim"') ?></td>
</tr>
<tr>
	<td> NAMA </td>
	<td> : </td>
	<td>  <?php echo form_input ('nama',$nama,'id="nama"') ?></td>
</tr>
<tr>
	<td> IP </td>
	<td> : </td>
	<td>  <?php echo form_input ('ip',$ip,'id="ip"') ?></td>
</tr>
<tr>
	<td> <?php echo form_submit('submit', 'update', 'id="submit"'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>

</body>
</html>


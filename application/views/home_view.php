<html>
<head>
	<title> Latihan Code Igniter</title>
	
</head>
	<body>
	
	<table border="1" cellpadding="1" cellspacing="1">
	<tr>
		<td>Nim</td>
		<td>Nama</td>
		<td>IP</td>
	</tr>
	<?php $i = 1  ?>
	<?php foreach($mhs as $item): ?>
	<tr>
		
		<td><?php echo $item->NIM ?></td>
		<td><?php echo $item->Nama?></td>
		<td><?php echo $item->IP ?></td>
		<td><?php echo anchor("cupdate/updatedata/$item->NIM",'edit')?></td>
	</tr>
	<?php endforeach ?>
	</table>
	</body>
</html>

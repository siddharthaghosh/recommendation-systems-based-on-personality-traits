<html>
<head>
<title><?php echo $title?></title>
</head>
<body>
<h1> <?php echo $heading?></h1>
<?php foreach ($tugas as $item)
{
	echo $item;
	echo "<br>";
}
?>
</body>
</html>
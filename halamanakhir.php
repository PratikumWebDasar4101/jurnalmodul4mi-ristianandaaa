<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>HOBBY</th>
	</tr>
	<?php
	$file = $_SESSION['HOBBY']
		foreach ($file as $value) {
		}
		?>
	</tr>
<tr>
	<td>
	<?php
	echo $value;
?>
</td>
<td>
	<form action="" method="POST">
		<input type="hidden" name="index" value="<?php echo $value; ?>">
		<input type="submit" name="Hapus" value="Hapus">
</td>
<td>
	<a href=""></a>
</td>
</tr>
<tr>
	<td>
		<img src="uploaded/<?php echo $_SESSION ['foto']; ?>">
	</td>
</tr>
</table>
</body>
</html>
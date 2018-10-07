<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'd_modul5');
	$nim = $_SESSION["nim"];
	$query = "SELECT * FROM ta5 WHERE NIM = $nim";
 	$view = mysqli_query($db,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
	<br><br><br><br>
	<center>
		<table border="2">
			<form action="" method="POST">
				<?php 	while ($data = mysqli_fetch_array($view)) { ?>
				<tr>
					<td>Nim</td>
					<td>:</td>
					<td><?php echo $data['NIM'];?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo $data['Nama'];?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?php echo $data['Jenis_Kelamin']; ?></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><?php echo $data['Tanggal_Lahir']; ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><?php echo $data['Email']; ?></td>
				</tr>
				<tr>
					<td>Program Studi</td>
					<td>:</td>
					<td><?php echo $data['Program_Studi']; ?></td>
				</tr>
				<tr>
					<td>Fakultas</td>
					<td>:</td>
					<td><?php echo $data['Fakultas'];; ?></td>
				</tr>
				<tr>
					<td>Komentar</td>
					<td>:</td>
					<td><?php echo $data['Komentar']; ?></td>
				</tr>
				<tr>
					<td colspan="3"><center><input type="submit" name="submit" value="Logout"></center></td>
				</tr>
				<?php }
				if (isset($_POST['submit'])) {
					session_destroy();
					header("Location: Register.php");
				}
				?>
			</form>
		</table>
	</center>
</body>
</html>

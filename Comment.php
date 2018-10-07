<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'd_modul5');
	$nama = $_SESSION["nama"];
	$nim = $_SESSION["nim"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<center>
		<br><br>
		<h1>Register Page</h1>
		<form action="" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo $nama;?></td>
				</tr>
				<tr>
					<td>Komentar</td>
					<td>:</td>
					<td><textarea name="comment"></textarea></td>
				</tr>
				<tr>
					<td colspan="3"><br><center><input type="submit" name="submit"></center> </td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		$Komentar = $_POST['comment'];
		$sql = "UPDATE ta5 SET Komentar = '$Komentar' WHERE NIM = $nim ";
		if (str_word_count($Komentar) == 5) {
			if (mysqli_query($db,$sql)) {
			echo "<script language = 'javascript'>alert('Database Update Success'); document.location=('View.php');</script>";
			}
			else{
				echo "<script language = 'javascript'>alert('Database Update Fail'); document.location=('Comment.php');</script>";
			}
		}
		else{
			echo "<script language = 'javascript'>alert('Comment minimal 5 kata'); document.location=('Comment.php');</script>";
		}

	}
?>

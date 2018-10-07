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
					<td>Nim</td>
					<td>:</td>
					<td><input type="text" name="nim"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<input type="radio" name="gender" value="Laki-Laki">Laki-Laki
						<input type="radio" name="gender" value="Perempuan">Perempuan
						<input type="radio" name="gender" value="Other">Lainnya
					</td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><input type="date" name="date" max="2018-07-10"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Fakultas</td>
					<td>:</td>
					<td>
						<select name="fakultas">
							<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
							<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
							<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
							<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
							<option value="Fakultas Teknik Informatika">Fakultas Teknik Informatika</option>
							<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
							<option value="Fakultas Komunikasi dan Bisnis">Fakultas Komunikasi dan Bisnis</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Program Studi</td>
					<td>:</td>
					<td>
						<select name="jurusan">
							<option value="Program Studi Teknik Telekomunikasi (S1)">Program Studi Teknik Telekomunikasi (S1)</option>
							<option value="Program Studi International ICT Business (S1)">Program Studi International ICT Business (S1)</option>
							<option value="Program Studi Teknik Industri (S1)">Program Studi Teknik Industri (S1)</option>
							<option value="Program Studi Manajemen Informatika (D3)">Program Studi Manajemen Informatika (D3)</option>
							<option value="Program Studi Teknik Informatika (S1)">Program Studi Teknik Informatika (S1)</option>
							<option value="Program Studi Desain Komunikasi Visual (S1)">Program Studi Desain Komunikasi Visual (S1)</option>
							<option value="Program Studi Administrasi Bisnis (International) (S1)">Program Studi Administrasi Bisnis (International) (S1)</option>
						</select>
					</td>
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
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'd_modul5');

	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jk = $_POST['gender'];
		$date = $_POST['date'];
		$email = $_POST['email'];
		$fakultas = $_POST['fakultas'];
		$jurusan = $_POST['jurusan'];

		$_SESSION["nama"] = $nama;
		$_SESSION["nim"] = $nim;
		if ($nim == is_numeric($nim)) {
			if (strlen($nim)==10 && strlen($nama)<=30	 && filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$sql = "INSERT INTO ta5(NIM,Nama,Jenis_Kelamin,Tanggal_Lahir,Email,Program_Studi,Fakultas) VALUES ($nim,'$nama','$jk','$date','$email','$jurusan','$fakultas')";
				if (mysqli_query($db,$sql)) {
					echo "<script language = 'javascript'>alert('Database Input Success'); document.location=('Comment.php');</script>";
				}
				else{
					echo "<script language = 'javascript'>alert('Database Input Error'); document.location=('Register.php');</script>";
				}
			}
			else{
				echo "<script language = 'javascript'>alert('input error'); document.location=('Register.php');</script>";
			}
		}
		else{
			echo "<script language = 'javascript'>alert('NIM harus numerik');
			 document.location=('Register.php');</script>";
		}
	}
?>

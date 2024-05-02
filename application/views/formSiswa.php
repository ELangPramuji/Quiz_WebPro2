<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>D Lemas</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="form">
		<form action="<?= base_url('siswa/cetak') ?>" method="post" class="form_siswa">
			<h1>D-Lemas</h1>
			<label for="nama">Nama Siswa : </label>
			<input type="text" name="nama" id="nama">
			<label for="nis">NIS : </label>
			<input type="text" name="nis" id="nis">
			<label for="kelas">Kelas : </label>
			<input type="text" name="kelas" id="kelas">
			<label for="tanggal">Tanggal Lahir : </label>
			<input type="date" name="tanggal" id="tanggal">
			<label for="alamat">Alamat : </label>
			<textarea name="alamat" id="alamat" cols="30" rows="5"></textarea>
			<label for="gender">Jenis Kelamin : </label>
			<div class="gender">
				<label for="gender_laki">Laki-laki</label>
				<input type="radio" name="gender" id="gender_laki">
				<label for="gender_perempuan">Perempuan</label>
				<input type="radio" name="gender" id="gender_perempuan">
			</div>
			<div class="options">
				<label for="agama">Agama : </label>
				<select name="agama" id="agama">
					<option value="islam">Islam</option>
					<option value="kristen">Kristen</option>
					<option value="katolik">Katolik</option>
					<option value="protestan">Protestan</option>
					<option value="buddha">Buddha</option>
					<option value="hindu">Hindu</option>
					<option value="khonghucu">Khonghucu</option>
				</select>
			</div>
			<input type="submit" value="submit">
		</form>
	</div>
</body>
</html>
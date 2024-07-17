<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>

 <!--ambil data dari navbar-->
<?php include('navbar.php'); ?>

<?php 

//ambil data dari config.php (isi database)//
include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: datapeserta.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>





<div class="container text-center m-5 bg-white">
<header>
		<h3 class="mt-5  ">Edit Data Peserta JWP TIKOM</h3>
	</header>
	
	<form action="prosesedit.php" method="POST" class="mt-5">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<?php $jk = $siswa['jenis_kelamin']; ?>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
		</p>











		
	<p>
			<label for="agama">Agama: </label>
			<?php $agama = $siswa['agama']; ?>
			<select name="agama">
				<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
				<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
				<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
				<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
			</select>
		</p>	
		<p>
			<label for="sekolah_asal">Sekolah Asal: </label>
			<input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>

</div>
	
	
	</body>
</html>

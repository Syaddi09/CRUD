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
     
    <!--ambil data dari config.php (isi database)-->
   <?php include("config.php"); ?>

	<header>
		<h3 class="text-center mt-5 ">Data Peserta JWP TIKOM</h3>
	</header>
	
	
	<table class=" container table table-success table-striped mt-5">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Sekolah Asal</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>















	
		
	<!--melakukan query untuk mengambil data siswa pada tabel database-->
		<?php
		$sql = "SELECT * FROM calon_siswa";
		$query = mysqli_query($db, $sql);
		
		 //Perulangan while akan mengulang selama masih ada isi dalam tabel.//
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$siswa['id']."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
			echo "<td>".$siswa['agama']."</td>";
			echo "<td>".$siswa['sekolah_asal']."</td>";
			
			echo "<td>";
			echo "<a href='edit.php?id=".$siswa['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a> | ";
			echo "<a href='tambah.php?id=".$siswa['id']."'>Tambah</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<script src="search.js"></script>
	</body>
</html>

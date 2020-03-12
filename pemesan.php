<?php

	require 'koneksi.php';
	$restoran = query("SELECT * FROM barber");
?>









<!DOCTYPE html>
<html>
<head>
	 <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- mycss -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
       <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>pemesanan</title>
    </head>
<body bgcolor="lightblue">
	<center>
		<h2>Data Nama Costumer</h2>
		<br/>
		
		
		<br/>
		<table border="1">
			<tr>
				<th>NO</th>
				<th>Nama</th>
				<th>Email</th>
				<th>NO.Tlp</th>
				<th>Alamat</th>
				<th>jumlah</th>
				<th>produk</th>
				<th>Aksi</th>
			</tr>
			<?php $i = 1; ?>

		<?php foreach ($restoran as $row ) : ?>
		<tr>
			<td><?= $i ?></td>
			<td><?= $row["name"]; ?></td>
			<td><?= $row["email"]; ?></td>
			<td><?= $row["phone"]; ?></td>
			<td><?= $row["message"]; ?></td>
			<td><?= $row["jumlah"]; ?></td>
			<td><?= $row["produk"]; ?></td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>"><button>ubah</button></a> 
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"><button>hapus</button></a>
			</td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
			
		</table>
		<button><a href="index.php">kembali ke halaman utama</a></button>


	</center>
	<br>
	<br>
	
</body>
</html>
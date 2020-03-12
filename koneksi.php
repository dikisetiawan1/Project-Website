<?php

	//koneksi ke database
	$conn = mysqli_connect("localhost", "root", "", "barbershop");



	function query($query) {
		global $conn;

		$result = mysqli_query($conn, $query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}

		return $rows;
	}


	function index($data) {
		global $conn;
		

		$name = htmlspecialchars($data["name"]);
		$email = htmlspecialchars($data["email"]);
		$phone = htmlspecialchars($data["phone"]);
		$message = htmlspecialchars($data["message"]);
		$jumlah = htmlspecialchars($data["jumlah"]);
		$produk = htmlspecialchars($data["produk"]);
		
		$query = "INSERT INTO barber
				VALUES
				('','$name','$email','$phone','$message','$jumlah','$produk')";
		mysqli_query($conn, $query);


		return mysqli_affected_rows($conn);
	}



function hapus($id) {
	global $conn;
	mysqli_query ($conn, "DELETE FROM barber WHERE id = $id");

	return mysqli_affected_rows($conn);

}

function ubah($data) {
	global $conn;

		$id = $data["id"];
		$name = htmlspecialchars($data["name"]);
		$email = htmlspecialchars($data["email"]);
		$phone = htmlspecialchars($data["phone"]);
		$message = htmlspecialchars($data["message"]);
		$jumlah = htmlspecialchars($data["jumlah"]);
		$produk = htmlspecialchars($data["produk"]);
	

		$query = "UPDATE barber SET 
					name = '$name',
					email = '$email',
					phone = '$phone',
					message = '$message',
					jumlah = '$jumlah',
					produk = '$produk'
					


				WHERE id = $id
					";
		mysqli_query($conn, $query);


		return mysqli_affected_rows($conn);
	}






?>
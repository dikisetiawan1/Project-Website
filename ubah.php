<?php
require 'koneksi.php';



//ambil data di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$barber = query("SELECT * FROM barber WHERE id = $id")[0];





//koneksi ke dbms
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");
//require 'functions.php';


//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	//ambil data dari tiap elemen atau belum



	//query insert data
	
	//cek apakah data berhasil diubah/tdk
	if( ubah($_POST) > 0) {

		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'pelanggan.php';
			</script>
		";
	}

}



?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- mycss -->
      <link rel="stylesheet" type="text/css" href="css/style.css">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>ubah data pemesan</title>
    </head>
<body>
	<div class="container">
		<div class="row">
			<div class="col m12 s12">

				 <form method="post" action="">
		          <div class="card-panel">
		            <h5>Please Fill out this form</h5>
		            <input type="hidden" name="id" value="<?= $barber["id"]; ?>">
		            <div class="input-field">
		            	 <h5>Nama</h5>
		              <input type="varchar" name="name" id="name" required class="validate" value="<?= $barber["name"]; ?>" >
		             
		              
		            </div>
		            <div class="input-field">
		            	<h5>Email</h5>
		              <input type="varchar" name="email" id="email" required class="validate" value="<?= $barber["email"]; ?>">
		              
		              
		            </div>
		            <div class="input-field">
		            	<h5>No.Tlp</h5>
		              <input type="number" name="phone" id="phone" required class="validate" value="<?= $barber["phone"]; ?>">
		              
		              
		            </div>
		            
		            <div class="input-field">
		            <h5>Alamat</h5>
		             <textarea name="message" id=" message" required class="validate" class="materialize-textarea" value="<?= $barber["message"]; ?>" ></textarea>
		             
		            </div>
		              <div class="input-field">
		            	<h5>Jumlah</h5>
		              <input type="number" name="jumlah" id="jumlah" required class="validate" value="<?= $barber["jumlah"]; ?>">
		             
		            </div>
		             <div class="input-field col s12">
             <select class="multiple" name="produk" value="<?= $barber["produk"]; ?>" >
            <option value="" disabled selected>Pilih produk</option>
            <option value="P01">P01</option>
            <option value="P02">P02</option>
            <option value="P03">P03</option>
            <option value="P04">P04</option>
            <option value="P05">P05</option>
            <option value="P06">P06</option>
            <option value="P07">P07</option>
            <option value="P08">P08</option>
            </select>
		    
          
            </div>
		            <button type="submit" name="submit" class="btn blue darken-2">update</button>
		          </div>
		          
        </form>
				
			</div>
			
		</div>
		
	</div>
	 
  <script type="text/javascript" src="js/materialize.min.js"></script>


<script >
	     const formselect = document.querySelectorAll('.multiple');
        M.FormSelect.init(formselect);

</script>



</body>
</html>
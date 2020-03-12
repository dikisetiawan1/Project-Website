
<?php
require 'koneksi.php';
//koneksi ke dbms
// $conn = mysqli_connect("localhost", "root", "", "restoran");
//require 'koneksi.php';
//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  //ambil data dari tiap elemen atau belum



  //query insert data
  
  //cek apakah data berhasil ditambahkan/tdk
  if( index($_POST) > 0) {

    echo "
      <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
      </script>
    ";
  }else {
    echo "
      <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
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
      <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

     


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Barbershop</title>
    </head>

    <body id="home" class="scrollspy">
<!-- ini navbar -->
 <div class="navbar-fixed">
    <nav class="blue lighten-2 ">
      <div class="container">
      <div class="nav-wrapper ">
        <a href="#home" class="brand-logo tooltipped"  data-tooltip="Logo">Barbershop</a>
         <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#about" class="tooltipped" data-tooltip="Tentang">About Us</a></li>
          <li><a href="#clients" class="tooltipped" data-tooltip="Pelanggan">Clients</a></li>
          <li><a href="#services" class="tooltipped" data-tooltip="Pelayanan">Service</a></li>
          <li><a href="#portfolio" class="tooltipped" data-tooltip="Produk">Product</a></li>
          <li><a href="#contact" class="tooltipped" data-tooltip="Kontak">Contact</a></li>
          <a class='dropdown-trigger btn cyan darken-2 tooltipped' href='#' data-target='dropdown1' data-tooltip="Lainnya">Other</a>
           <ul id='dropdown1' class='dropdown-content'>
            <li><a href="#maps" class="tooltipped" data-tooltip="Lokasi">maps Location</a></li>
            <li><a href="hairmodel.php" class="tooltipped" data-tooltip="Model rambut">Hairstyle</a></li>
            <li><a href="hairmodel.php" class="tooltipped" data-tooltip="Testimoni">Testimonial</a></li>
          </ul>
           <i class="fab fa-facebook right tooltipped" data-tooltip="Facebook"></i></a>
            <i class="fab fa-twitter-square right tooltipped" data-tooltip="Twitter"></i>
            <i class="fab fa-instagram right tooltipped" data-tooltip="Instagram"></i>

        </ul>

      </div>
      </div>
    </nav>
  </div>

<!-- slide nav -->
 <ul class="sidenav" id="mobile-nav">
   <li><a href="#about" >About Us</a></li>
          <li><a href="clients">Clients</a></li>
          <li><a href="#services">Service</a></li>
          <li><a href="#card">Product</a></li>
          <li><a href="#contact">Contact</a></li>
           <li><a href="#maps">maps Location</a></li>
            <li><a href="hairmodel.php">Hairstyles</a></li>
            <li><a href="hairmodel.php">Testimonial</a></li>
            
  </ul>


<!-- slider -->
 <div class="slider">
    <ul class="slides">

      <li>
        <img src="img/slider/A.jpg"> 
        <div class="caption left-align ">
             <h3>Barbershop Pebayuran</h3>
          <h5 class="light grey-text text-lighten-3">Stylized in a barbershop !</h5>
        
        </div>
      </li>
       <li>
        <img src="img/slider/D.jpg"> 
        <div class="caption right-align ">
          <h3>Barbershop Pebayuran</h3>
          <h5 class="light grey-text text-lighten-3">Stylized in a barbershop !</h5>
        </div>
      </li>
       <li>
        <img src="img/slider/C.jpg"> 
        <div class="caption center-align ">
             <h3>Barbershop Pebayuran</h3>
          <h5 class="light grey-text text-lighten-3">Stylized in a barbershop !</h5>
      
      </li>
      </ul>
      </div>



<!-- about us -->

<section id="about" class="about bg-light scrollspy" >
  <div class="container ">
    <div class="row">
      <h3 class="center light grey-text text-darken-3">About Us</h3>
      <div class="col m6 light">
        <h5>Barbershop</h5>
       Adalah tempat untuk memangkas rambut khususnya kepada kaum laki-laki.
       Berada di tempat yang strategis, dengan berbagai macam gaya rambut yang sangat stylist abisss...
      </div>
      <div class="col m6 light">
        <ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">person</i>Barberman</div>
      <div class="collapsible-body"><span>Mr. Rendi <br> Mr. Sanjaya saputra</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Alamat Barbershop</div>
      <div class="collapsible-body"><span>Bogor <br> Tasik malaya.</span>Skills</div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>
   <div class="progress">
          <div class="determinate" style="width: 99%"></div>
         </div>
        
      </span></div>
    </li>
  </ul>
        
      </div>
    

    </div>

    
  </div>
  <br>
  <br>
</section>


<!-- our clients -->
    <div  class="parallax-container ">
      <div class="parallax"><img src="img/slider/razors.jpg"></div>


      <div id="clients" class="container clients scrollspy">
        <h3 class="center light white-text">Our Clients</h3>
        <div class="row ">
          <div class="col m12 s12 center">
           <a  href="galeri.php"  class="waves-effect waves-light btn-small scrollspy " id="">Galeri Barbershop</a></li> 
          </div>
        
          
        </div>
      </div>
    </div>
    <!-- services -->
    <section id="services" class="services grey lighten-3 scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="light grey-text text-darken-3 center"> Our services</h3>
          <div class="col m4 s12">
            <div class="card-panel">
              <center> <i class="material-icons medium ">schedule</i></center>
              <h5 class="center">Schedule</h5>
              <center>
              <p>Buka
                jam 08.00 WIB</p>
              <p>Tutup
                jam 20.00 WIB</p>
              <p>Hari
                Senin - Minggu</p>
              </center>
              
            </div>
            
          </div>
           <div class="col m4 s12">
            <div class="card-panel">
              <center> <i class="material-icons medium ce ">card_membership</i></center>
              <h5 class="center">Card Membership</h5>
              <p> Card member ini hanya digunakan untuk  di barbershop kami,tidak berlaku di tempat lain,semoga anda menikmati memangkas rambut di barber kami.</p>
              
            </div>
            
          </div>
           <div class="col m4 s12">
            <div class="card-panel">
              <center> <i class="material-icons medium ">content_cut</i></center>
              <h5 class="center">Haircut</h5>
              <p>Kami memiliki barberman yang mempunyai keahlian memangkas rambut bermacam model. Dan setelahnya ada pijat reflexi. </p>
              
            </div>
            
          </div>
          
        </div>
        
      </div>
      

    </section>





    <!-- akhir service -->




<!-- portfolio -->
<section id="portfolio" class="portfolio bg-light scrollspy">
  <div class="container">
    <h3 class="light grey-text text-darken-3 center">Pomade Barbershop</h3>
    <h5 class="light grey-text text-darken-3 center"> Produk original</h5>
    <br>
    <br>
    <div class="row">

      <div class="col m3 s12">
         <p class="center">kode P01</p>
        <img src="pomade/4.jpg" class="responsive-img materialboxed">
        <h6 class="">
            <i class="material-icons tiny ">add_shopping_cart</i> IDR 150.000.00</h6> 
         
        
      </div>

       <div class="col m3 s12"> 
        <p class="center">kode P02</p>     
        <img src="pomade/11.jpg" class="responsive-img materialboxed">
         <h6 class="">
          <i class="material-icons tiny">add_shopping_cart</i> IDR 200.000.00</h6>
        
        
      </div>
       <div class="col m3 s12">
         <p class="center">kode P03</p>
        <img src="pomade/2.jpg" class="responsive-img materialboxed">
         <h6 class="">
         
          <i class="material-icons tiny">add_shopping_cart</i> IDR 110.000.00</h6>
        
        
      </div>
       <div class="col m3 s12">
        <p class="center">kode P08</p>
        <img src="pomade/12.jpg" class="responsive-img materialboxed">
         <h6 class="">
           
          <i class="material-icons tiny">add_shopping_cart</i> IDR 95.000.00</h6>
        
        
      </div>
      
    </div>
    <div class="row">
       <div class="col m3 s12">
        <p class="center">kode P04</p>
        <img src="pomade/6.jpg" class="responsive-img materialboxed">
         <h6 class="">
           
          <i class="material-icons tiny">add_shopping_cart</i> IDR 150.000.00</h6>
        
        
      </div>
       <div class="col m3 s12">
        <p class="center">kode P05</p>
        <img src="pomade/7.jpg" class="responsive-img materialboxed">
         <h6 class="">
           
          <i class="material-icons tiny">add_shopping_cart</i> IDR 250.000.00</h6>
        
        
      </div>
       <div class="col m3 s12">
        <p class="center">kode P06</p>
        <img src="pomade/9.jpg" class="responsive-img materialboxed">
         <h6 class="">
           
          <i class="material-icons tiny">add_shopping_cart</i> IDR 85.000.00</h6>
        
        
      </div>
       <div class="col m3 s12">
         <p class="center">kode P07</p>
        <img src="pomade/10.jpg" class="responsive-img materialboxed">
         <h6 class="">
          
          <i class="material-icons tiny">add_shopping_cart</i> IDR 100.000.00</h6>
        
        
      </div>
      
    </div>
    
  </div>
  
</section>


<!-- contact us -->

<section id="contact" class="contact grey lighten-3 scrollspy">
  <div class="container">
    <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
    <div class="row">
      <div class="col m5 s12">
        <div class="card-panel blue darken-2 center white-text">
          <i class="material-icons">email</i>
          <h5>Contact</h5>
          <p>Jika ingin memesan pomade barbershop silahkan kontak no telp yg tertera di bawah atau isi form yg sudah di sediakan di samping.</p>
         
        </div>
         <ul class="collection with-header">
        <li class="collection-header center"><h4>Address</h4>
        <li class="collection-item"></a> <i  class="material-icons tiny">location_on</i> Jl.Pebayuran kab.bekasi 
        <li class="collection-item"> <i class="material-icons tiny">call</i> 085777613672</li>
        <li class="collection-item"> <i class="material-icons tiny">public</i> West Java, Indonesia</li>
      </ul>
      <a  href="https://goo.gl/maps/1wUT4nDY8awM1tAE9"  class="waves-effect waves-light btn-small scrollspy" id="maps">Maps</a></li>
      </div>
      <div class="col m7 s12">
        <form method="post" action="">
          <div class="card-panel">
            <h5>Silahkan isi formulir pemesanan dibawah ini :</h5>
            <div class="input-field">
              <input type="text" name="name" id="name" required class="validate">
              <label for="name">Nama</label>
              
            </div>
            <div class="input-field">
              <input type="email" name="email" id="email" class="validate">
              <label for="email">Email</label>
              
            </div>
            <div class="input-field">
              <input type="number" name="phone" id="phone" required class="validate">
              <label for="phone">No.Telp</label>
              
            </div>
            <div class="input-field">
             <textarea name="message" id=" message"  class="materialize-textarea" ></textarea>
             <label for="message">Alamat</label>
            </div>
             <div class="input-field">
              <input type="number" name="jumlah" id="jumlah" required class="validate">
              <label for="jumlah">Jumlah</label>
              
            </div>
            
            <div class="input-field col s12">
             <select class="multiple" name="produk">
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

            <button type="submit" name="submit" class="btn blue darken-2">Kirim</button>
            <a  href="pemesan.php"  class="waves-effect waves-light btn-small">Melihat data pemesan</a>
          </div>
          
        </form>
        
        
      </div>      
    </div>
  </div>
  
</section>


<!-- footer -->

 <footer  class="blue darken-2">
          <div class="container-footer  ">
            <div class="row">
             
            </div>
             <div class="footer-copyright">
            <div class="container white-text center">
            © 2019 Diki setiawan

            </div>
            <div class="medium center white-text mr-3">
                <i class="fab fa-youtube tooltipped  mr-3" data-tooltip="Youtube" ></i>
                <i class="fab fa-google-plus-square tooltipped c mr-3" data-tooltip="Google plus"></i>
                <i class="fas fa-wifi tooltipped mr-3" data-tooltip="Wifi"></i>
              
            </div>
          </div>
          </div>
          

</footer>










      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>


      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

         const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 500,
          transition: 600,
          interval: 3000
        });

         const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

         const scrollspy = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scrollspy);


        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const dropdown1 = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropdown1);

          const formselect = document.querySelectorAll('.multiple');
        M.FormSelect.init(formselect);

            const tooltip = document.querySelectorAll('.tooltipped');
        M.Tooltip.init(tooltip);

          const collapsible = document.querySelectorAll('.collapsible');
        M.Collapsible.init(collapsible);

          const modal = document.querySelectorAll('.modal');
        M.Modal.init(modal);




      </script>
    </body>
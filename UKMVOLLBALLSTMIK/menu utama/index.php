<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>WEB UKM VOLI STMIK INDONESIA BANJARMASIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="16x16" href="images/logovolly.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/3894287d12.js" crossorigin="anonymous"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
	background-image:url("images/back1.jpg");
	background-size:cover; 
  }
  .bg-2 {
	background-image:url("images/back2.png");
	background-size:cover;
  
  }
  .bg-1 h3 {color: black;}
  .bg-2 h3 {color: white;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">UKM Bola Volly STMIK INDONESIA BANJARMASIN</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">Beranda</a></li>
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tentang
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#Profil">Profil</a></li>
            <li><a href="#Visi_dan_Misi">Visi,Misi dan Tujuan</a></li>
            <li><a href="#Struktur_Organisasi">Struktur Organisasi</a></li>
          </ul>
        </li>
        <li><a href="#Agenda">Agenda</a></li>
        <li><a href="#Kontak">Kontak</a></li>
        <li><a href="pendaftaran.php">Daftar</a></li>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/fto1.jpg">
        <div class="carousel-caption">
          <p>Perkenalan UKM VOLI di aula bersujud.</p>
        </div>      
      </div>

      <div class="item">
        <img src="images/fto2.jpg">
        <div class="carousel-caption">
          <p>Foto anggota UKM VOLLY STMIK INDONESIA BANJARMASIN 1.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="images/fto3.jpg">
        <div class="carousel-caption">
          <p>Foto anggota UKM VOLLY STMIK INDONESIA BANJARMASIN 2.</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>	

<!-- Container (Latar Belakang) -->
<div id="Profil" class="container text-center">
<p class="text-center"><strong></strong></p><br>
      <a href="#demo" data-toggle="collapse">
<img src="images/logovolly.png" width="200px" style="margin-left:0px;">
</a>
      <div id="demo" class="collapse">
        <p>LOGO UKM BOLA VOLI STMIK INDONESIA BANJARMASIN</p>
      </div>
<br>
  <h3>Profil</h3>
  <p><em>LOYALITAS TANPA BATAS !!</em></p>
  <p>UKM Voli ini sejak awal memang tidak berbasis pada kemampuan secara individu, UKM ini tidak mengutamakan pemain berkelas yang harus masuk menjadi anggota, akan tetapi UKM ini juga berbasis pada organisasi. Oleh karena itu, para pengurus dan anggota di UKM ini bukan hanya sekedar berlatih atau bermain voli, akan tetapi juga melaksanakan penyelenggaraan organisasi sebagai bekal dan pengalaman bagi anggota juga untuk dunia yang akan dimasuki setelah perkuliahan.</p>
       </div>
    </div>
  </div>
</div>

<!-- Container (Visi,Misi dan Tujuan UKM Bola Volly STMIK) -->
<div id="Visi_dan_Misi" class="container text-center">
  <h3>Visi,Misi dan Tujuan</h3>
  <p><em>Visi</em></p>
  <p>Menjadikan UKM Bola Voli STMIK INDONESIA BANJARMASIN sebagai wadah pelatihan dan pengembangan bakat di bidang olahraga, khususnya bola voli, serta sebagai wadah untuk berorganisasi.</p>
  <br>
  <p><em>Misi</em></p>
  <p>1. Mengembangkan kemampuan dan prestasi mahasiswa STMIK dalam olahraga bola voli melalui latihan-latihan rutin sesuai dengan jadwal yang telah ditentukan.</p>
  <p>2. Menjalin hubungan persahabatan dengan UKM dari Universitas lain agar jaringan komunikasi semakin meluas melalui sparing-sparing atau pertandingan-pertandingan yang diikuti.</p>
  <p>3. Mengembangkan kreativitas dan semangat berorganisasi melalui adanya diklat bagi mahasiswa baru yang tergabung menjadi anggota UKM Voli STMIK INDONESIA BANJARMASIN.</p>
  <br>
  <p><em>Tujuan</em></p>
  <p> Mewujudkan UKM yang dapat menampung minat dan bakat mahasiswa yang tertarik pada bidang olahraga bola voli sekaligus menjadi tempat pembelajaran berorganisasi dan mencapai prestasi.</p>
</div>

<!-- Container (Visi,Misi dan Tujuan UKM Bola Volly STMIK) -->
<div id="Struktur_Organisasi" class="container text-center">
  <h3>Struktur Organisasi</h3>
<p class="text-center"><strong></strong></p><br>
      <img src="images/struktur.png" width="1200px" style="margin-left:-120px;" >
</div>
<br>
<br>
<!-- Container (Jadwal dan Tempat latihan) -->
<div id="Agenda" class="bg-1">
  <div class="container">
    <h3 class="text-center">Tempat dan Jadwal Latihan</h3>    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/fto4.jpg"  width="400">
          <p><strong>Lap Volly Otmil I-06</strong></p>
          <p>Minggu Pagi jam 08.00 WITA</p>
          <a href="https://goo.gl/maps/rRn4cxd2ACMrSUKu7" target="_blank">
          <button class="btn">Cek Lokasi</button>
          </a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/foto5.jpg" width="400" >
          <p><strong>Lap Volly Pelindo 3</strong></p>
          <p>Kamis pagi jam 08.00 WITA</p>
          <a href="https://goo.gl/maps/ZHsVLyJ5PdMgg4Bf8" target="_blank">
          <button class="btn">Cek Lokasi</button>
          </a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/fto6.jpg" width="400">
          <p><strong>Lap Volly GM</strong></p>
          <p>Selasa Malam jam 20.00 WITA</p>
          <a href="https://goo.gl/maps/T2ftThkn2aqioh6W8" target="_blank">
          <button class="btn">Cek Lokasi</button>
          </a>
        </div>
      </div>
    </div>
  </div>
    <div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container (Contact Section) -->
<div id="Kontak" class="container">
  <h3 class="text-center">Kontak</h3>
  <div class="row">
    <div class="col-md-4">
      <p><span class="glyphicon glyphicon-map-marker"></span> STMIK INDONESIA BANJARMASIN</p>
      <p><i class="fa-brands fa-whatsapp"></i> 080823492412</p>
      <p><i class="fa-brands fa-instagram"></i> Vollyballstmikib@gmail.com</p>
    </div>
    <div class="col-md-8">
    <form id="kontak" action="Inbox.php" method="POST">
      <div class="row">
      <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
      <div class="col-md-12 form-group">
        <input type="hidden" name="date_receive_inbox" id="date" value="<?php echo date('Y-m-d h:i:sa' ); ?>">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Kirim</button>
       </div>
      </div>
</div>
</form>
  </div>
</div>



  <br>
  <h3 class="text-center">Ayo Gabung Bersama Kami</h3> 
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="Kembali Keatas">
    <span class="glyphicon glyphicon-chevron-up"></span>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
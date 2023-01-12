<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Form Pendaftaran UKM VOLLY STMIK INDONESIA BANJARMASIN</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/logovolly.png"/>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <Style>
.bg-1 {
    background-color:#3c3c3b;
    
  }
.bg-2 {
    background-image:url("images/back5.png");
	background-size:cover;
  }
  .bg-2 h2 {color: black;}
  .bg-2 label {color: black;}

    </Style>
</head>
<body>
    <div class="page-wrapper bg-1 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4 bg-2">
                <div class="card-body">
                    <h2 class="title">Pendaftaran Anggota Baru</h2>
                    <form  action="daftar.php" method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama Lengkap</label>
                                    <input class="input--style-4" type="text" name="Nama">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Alamat</label>
                                    <input class="input--style-4" type="text" name="Alamat">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tanggal Lahir</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="TanggalLhr">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Jenis Kelamin</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Laki-Laki
                                            <input type="radio" checked="checked" value="Laki-Laki" name="Gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Perempuan
                                            <input type="radio"  value="Perempuan" name="Gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group validate-input" data-validate = "Valid email is: a@b.c">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="Email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">No HP/WA</label>
                                    <input class="input--style-4" type="text" name="Phone">
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Daftar</button>
                         </div>
                         <br>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>



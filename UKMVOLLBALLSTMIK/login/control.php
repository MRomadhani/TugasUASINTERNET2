<?php
$link     = mysqli_connect('localhost','root','','db_ukmvoli');

// Menampilkan Data Tabel Services
$perpage_services  = 5;
$page_services     = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_services    = ($page_services > 1) ? ($page_services * $perpage_services) - $perpage_services :0;     
$result_services   = mysqli_query ($link, "SELECT * FROM tbl_services");
$total_services    = mysqli_num_rows($result_services);
$pages_services    = ceil($total_services/$perpage_services);
$articles_services = "SELECT * FROM tbl_services ORDER BY id_services DESC LIMIT $start_services, $perpage_services";
$tampil_services   = mysqli_query($link,$articles_services);
$id_services	   = $start_services + 1;

// Menampilkan Data Tabel Gallery
$perpage_gallery  = 6;
$page_gallery     = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_gallery    = ($page_gallery > 1) ? ($page_gallery * $perpage_gallery) - $perpage_gallery :0;     
$result_gallery   = mysqli_query ($link, "SELECT * FROM tbl_gallery");
$total_gallery    = mysqli_num_rows($result_gallery);
$pages_gallery    = ceil($total_gallery/$perpage_gallery);
$articles_gallery = "SELECT * FROM tbl_gallery ORDER BY id_gallery DESC LIMIT $start_gallery, $perpage_gallery";
$tampil_gallery   = mysqli_query($link,$articles_gallery);
$id_gallery		  = $start_gallery + 1;

// Menampilkan Data Tabel About Us
$perpage_aboutus  = 5;
$page_aboutus     = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_aboutus    = ($page_aboutus > 1) ? ($page_aboutus * $perpage_aboutus) - $perpage_aboutus :0;     
$result_aboutus   = mysqli_query ($link, "SELECT * FROM tbl_aboutus");
$total_aboutus    = mysqli_num_rows($result_aboutus);
$pages_aboutus    = ceil($total_aboutus/$perpage_aboutus);
$articles_aboutus = "SELECT * FROM tbl_aboutus ORDER BY id_aboutus DESC LIMIT $start_aboutus, $perpage_aboutus";
$tampil_aboutus   = mysqli_query($link,$articles_aboutus);
$id_aboutus		  = $start_aboutus + 1;

// Menampilkan Data Tabel Testimonial
$perpage_testimoni  = 5;
$page_testimoni     = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_testimoni    = ($page_testimoni > 1) ? ($page_testimoni * $perpage_testimoni) - $perpage_testimoni :0;     
$result_testimoni   = mysqli_query ($link, "SELECT * FROM tbl_testimonial");
$total_testimoni    = mysqli_num_rows($result_testimoni);
$pages_testimoni    = ceil($total_testimoni/$perpage_testimoni);
$articles_testimoni = "SELECT * FROM tbl_testimonial ORDER BY id_testimonial DESC LIMIT $start_testimoni, $perpage_testimoni";
$tampil_testimoni   = mysqli_query($link,$articles_testimoni);
$id_testimoni		  = $start_testimoni + 1;

// Menampilkan Data Tabel Inbox
$perpage_inbox  = 5;
$page_inbox     = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_inbox    = ($page_inbox > 1) ? ($page_inbox * $perpage_inbox) - $perpage_inbox :0;     
$result_inbox   = mysqli_query ($link, "SELECT * FROM tbl_inbox");
$total_inbox    = mysqli_num_rows($result_inbox);
$pages_inbox    = ceil($total_inbox/$perpage_inbox);
$articles_inbox = "SELECT * FROM tbl_inbox ORDER BY tgl_masuk DESC LIMIT $start_inbox, $perpage_inbox";
$tampil_inbox   = mysqli_query($link,$articles_inbox);
$id_inbox		  = $start_inbox + 1;

// Menampilkan Data Tabel Pendaftaran
$perpage_pendaftaran  = 5;
$page_pendaftaran     = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_pendaftaran    = ($page_pendaftaran > 1) ? ($page_pendaftaran * $perpage_pendaftaran) - $perpage_pendaftaran :0;     
$result_pendaftaran   = mysqli_query ($link, "SELECT * FROM tbl_pendaftaran");
$total_pendaftaran    = mysqli_num_rows($result_pendaftaran);
$pages_pendaftaran    = ceil($total_pendaftaran/$perpage_pendaftaran);
$articles_pendaftaran = "SELECT * FROM tbl_pendaftaran ORDER BY id_pendaftaran DESC LIMIT $start_pendaftaran, $perpage_pendaftaran";
$tampil_pendaftaran   = mysqli_query($link,$articles_pendaftaran);
$id_pendaftaran		  = $start_pendaftaran + 1;


// Menampilkan Pesan Terbaru
$perpage_pesanterbaru  = 3;
$page_pesanterbaru     = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_pesanterbaru    = ($page_pesanterbaru > 1) ? ($page_pesanterbaru * $perpage_pesanterbaru) - $perpage_pesanterbaru :0;     
$result_pesanterbaru   = mysqli_query ($link, "SELECT * FROM tbl_inbox");
$total_pesanterbaru    = mysqli_num_rows($result_pesanterbaru);
$pages_pesanterbaru    = ceil($total_pesanterbaru/$perpage_pesanterbaru);
$articles_pesanterbaru = "SELECT * FROM tbl_inbox ORDER BY tgl_masuk DESC LIMIT $start_pesanterbaru, $perpage_pesanterbaru";
$tampil_pesanterbaru   = mysqli_query($link,$articles_pesanterbaru);
$id__pesanterbaru		  = $start_pesanterbaru + 1;

// Menampilkan Anggota Baru Yang Ingin bergabung
$perpage_anggotabaru  = 3;
$page_anggotabaru     = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_anggotabaru    = ($pageanggotabaru > 1) ? ($page_anggotabaru * $perpage_anggotabaru) - $perpage_anggotabaru :0;     
$result_anggotabaru   = mysqli_query ($link, "SELECT * FROM tbl_pendaftaran");
$total_anggotabaru    = mysqli_num_rows($result_anggotabaru);
$pages_anggotabaru    = ceil($total_anggotabaru/$perpage_anggotabaru);
$articles_anggotabaru = "SELECT * FROM tbl_pendaftaran ORDER BY id_pendaftaran DESC LIMIT $start_anggotabaru, $perpage_anggotabaru";
$tampil_anggotabaru   = mysqli_query($link,$articles_anggotabaru);
$id__anggotabaru		  = $start_anggotabaru + 1;


// Menampilkan Data Tabel Profile
$perpage_profile  = 5;
$page_profile     = isset($_GET['pageconf']) ? (int)$_GET['pageconf'] : 1;
$start_profile    = ($page_profile > 1) ? ($page_profile * $perpage_profile) - $perpage_profile :0;     
$result_profile   = mysqli_query ($link, "SELECT * FROM tbl_profile");
$total_profile    = mysqli_num_rows($result_profile);
$pages_profile    = ceil($total_profile/$perpage_profile);
$articles_profile = "SELECT * FROM tbl_profile ORDER BY id_profile DESC LIMIT $start_profile, $perpage_profile";
$tampil_profile   = mysqli_query($link,$articles_profile);
$id_profile		  = $start_profile + 1;

// Menampilkan Data Tabel Admin
$perpage_admin  = 5;
$page_admin     = isset($_GET['pageconf']) ? (int)$_GET['pageconf'] : 1;
$start_admin    = ($page_admin > 1) ? ($page_admin * $perpage_admin) - $perpage_admin :0;     
$result_admin   = mysqli_query ($link, "SELECT * FROM tbl_admin");
$total_admin    = mysqli_num_rows($result_admin);
$pages_admin    = ceil($total_admin/$perpage_admin);
$articles_admin = "SELECT * FROM tbl_admin ORDER BY id_admin DESC LIMIT $start_admin, $perpage_admin";
$tampil_admin   = mysqli_query($link,$articles_admin);
$id_admin	   = $start_admin + 1;

// Menampilkan Data Tabel Contact US
$perpage_contactus  = 5;
$page_contactus     = isset($_GET['pageconf']) ? (int)$_GET['pageconf'] : 1;
$start_contactus    = ($page_contactus > 1) ? ($page_contactus * $perpage_contactus) - $perpage_contactus :0;     
$result_contactus   = mysqli_query ($link, "SELECT * FROM tbl_contactus");
$total_contactus    = mysqli_num_rows($result_contactus);
$pages_contactus    = ceil($total_contactus/$perpage_contactus);
$articles_contactus = "SELECT * FROM tbl_contactus ORDER BY id_contactus DESC LIMIT $start_contactus, $perpage_contactus";
$tampil_contactus   = mysqli_query($link,$articles_contactus);
$id_contactus	   = $start_contactus + 1;




?>
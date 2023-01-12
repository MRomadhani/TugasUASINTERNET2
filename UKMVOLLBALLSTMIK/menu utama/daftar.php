<?php
$link = mysqli_connect('localhost','root','','db_ukmvoli');
    $Nama = $_POST["Nama"];
    $Alamat =$_POST["Alamat"];
    $Tgl_lhr =$_POST["TanggalLhr"];
    $Jns_kelamin =$_POST["Gender"];
    $Email =$_POST["Email"];
    $No =$_POST["Phone"];

    $query_sql = "INSERT INTO tbl_pendaftaran (Nama, Alamat, Tgl_lahir, Jenis_kelamin, Email, No_hp)
    VALUES ('$Nama', '$Alamat', '$Tgl_lhr', '$Jns_kelamin', '$Email', '$No')";

    if (mysqli_query($link,$query_sql)){
        echo"<script language=\"javascript\">
        alert (\"Permintaan anda telah dikirim :)\")
        document.location=\"pendaftaran.php\";
        </script>"; 
    }else{
        echo"<script language=\"javascript\">
        alert (\"Permintaan anda gagal dikirimkuen :(\")
        document.location=\"pendaftaran.php\";
        </script>";
    }
    mysqli_close($link);
?>
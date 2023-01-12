<?php
$link = mysqli_connect('localhost','root','','db_ukmvoli');
    $date_receive_inbox = $_POST["date_receive_inbox"];
    $name =$_POST["name"];
    $email =$_POST["email"];
    $comments =$_POST["comments"];

    $query_sql = "INSERT INTO tbl_inbox (tgl_masuk, nama, email, komen)
    VALUES ('$date_receive_inbox', '$name', '$email', '$comments')";

    if (mysqli_query($link,$query_sql)){
        echo"<script language=\"javascript\">
        alert (\"Pesan anda berhasil dikirimkan\")
        document.location=\"index.php\";
        </script>"; 
    }else{
        echo"<script language=\"javascript\">
        alert (\"Pesan anda gagal dikirimkan\")
        document.location=\"index.php\";
        </script>";
    }
    mysqli_close($link);
?>
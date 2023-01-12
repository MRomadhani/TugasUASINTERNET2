<?php 
require ('../../timer_module.php');

    if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
        echo "<script>alert('Akses ditolak !!! Silahkan sign ini terlebih dahulu, Terimakasih.'); window.location = '../../index.php'</script>";
    }else{
include '../../header_module.php';
include '../../menu_module.php';
include '../../control.php';

// MODULE ADMIN \\
	echo " <section id=\"main-content\">
         	<section class=\"wrapper\">
           <div class=\"row mt\">
            <div class=\"col-md-12\">
             <div class=\"content-panel\">
              <table class=\"table table-striped table-advance table-hover\">
                <h4>[ <i class=\"fa fa-info\"> ]</i> Tabel Admin</h4>
                <hr>
                  <thead>
                  <tr>
                    <th><i class=\"\"></i> No</th>
                    <th><i class=\"\"></i> User Name</th>
                    <th><i class=\"\"></i> Password</th>
                    <th><i class=\"fa fa-edit\"></i> Aksi</th>
                  </tr>
                  </thead>
                  <tbody>";


$show_admin = mysqli_query ($link, "SELECT * FROM tbl_admin ORDER BY id_admin DESC");
while ($data_admin = mysqli_fetch_assoc($tampil_admin)) {
echo"
                  <tr>
                    <td>$id_admin</td>
                    <td>$data_admin[username]</td>
                    <td>$data_admin[password]</td>
                    <td>
                      <a href=\"../../module/mod_admin/aksi.php?admin=add\"><button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button></a>
                      <a href=\"../../module/mod_admin/aksi.php?admin=edit&id_admin=$data_admin[id_admin]\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                      <a href=\"../../module/mod_admin/aksi.php?admin=hapus&id_admin=$data_admin[id_admin]\"><button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i></button></a>
                    </td>
                  </tr>";
                  $id_admin++;
}
                  echo"
                  </tbody>
                </table>      
                <hr>";
                 echo"<div class=\"btn-group1\">";
                    for ($i=1; $i<=$pages_admin; $i++){
                    echo"
                      <a href=\"admin.php?pageconf=$i\"><button type=\"button\" class=\"btn btn-default\">$i</button></a>";
                  }
                  echo"  
                </div>";
        mysqli_close($link);                
               
               echo"
              </div><!-- /content-panel -->
          </div><!-- /col-md-12 -->
      </div><!-- /row -->
    </section>
    </section>";    

include '../../footer_module.php';
}
?>


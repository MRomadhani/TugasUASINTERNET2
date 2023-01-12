<?php 

include '../../header_module.php';
include '../../menu_module.php';
include '../../control.php';

// MODULE ADMIN \\
$module   = @$_GET['admin'];

if ($module == "add"){
    $username = @$_POST['username'];
    $password = @$_POST['password'];

    $tambah     = "INSERT INTO tbl_admin (username, password)
                  VALUES ('$username', '$password')";
    
    echo " <section id=\"main-content\">
            <section class=\"wrapper\">
             <div class=\"row mt\">
              <div class=\"col-md-12\">
               <div class=\"form-panel\">
                <table class=\"table table-striped table-advance table-hover\">
                 <h4>[ <i class=\"fa fa-check\"> ]</i> Tambah Data Tabel Admin</h4>
                  <hr>
                    <form class=\"form-horizontal style-form\" action=\"../../module/mod_admin/aksi.php?admin=add\" method=\"POST\" enctype=\"multipart/form-data\">
                      <div class=\"form-group\">          
                          <label class=\"col-sm-2 col-sm-2 control-label\">User Name</label>
                          <div class=\"col-sm-10\">
                              <input type=\"text\" class=\"form-control\" name=\"username\" oninvalid=\"alert('User Name harus di isi !');\"required>
                          </div>

                          <label class=\"col-sm-2 col-sm-2 control-label\">Password</label>
                          <div class=\"col-sm-10\">
                              <input type=\"text\" class=\"form-control\" name=\"password\" oninvalid=\"alert('Password harus di isi !');\"required>
                          </div>

                      </div>
                </table>      
                  <hr>
                      <div class=\"btn-group1\">
                          <a href=\"../../module/mod_admin/aksi.php?admin=add#\"><button type=\"submit\" name=\"submit\" class=\"btn btn-success\">Simpan</button></a>
                          <a href=\"../../module/mod_admin/admin.php?tbl=admin\"><button type=\"reset\" name=\"reset\" class=\"btn btn-warning\">Batal</button></a>
                      </div>
                    </form>
               </div><!-- /form-panel -->
              </div><!-- /col-md-12 -->
             </div><!-- /row mt-->
            </section>
           </section>";
           if (isset($_POST['submit'])) {             
               if (mysqli_query($link,$tambah)) {
                echo "<script language=\"javascript\">
                         alert (\"Data Berhasil Direkam !!\")
                         document.location=\"admin.php?tbl=admin\";
                       </script>";               
               }else{
                  echo "<script language=\"javascript\">
                         alert (\"Gagal Input Data\")
                         document.location=\"aksi.php?admin=add\";
                      </script>";
               }
           }
           mysqli_close($link);
}


if ($module == "edit"){
    $id_user = @$_GET['id_admin'];
    $edit           = mysqli_query($link, "SELECT * FROM tbl_admin WHERE id_admin='$id_admin'");
    $showuser  = mysqli_fetch_array($edit);

    echo " <section id=\"main-content\">
            <section class=\"wrapper\">
             <div class=\"row mt\">
              <div class=\"col-md-12\">
               <div class=\"form-panel\">
                <table class=\"table table-striped table-advance table-hover\">
                 <h4>[ <i class=\"fa fa-edit\"> ]</i> Edit Data Tabel user</h4>
                  <hr>
                    <form class=\"form-horizontal style-form\" action=\"../../module/mod_admin/aksi.php?admin=update&id_admin=$showadmin[id_admin]\" method=\"POST\" enctype=\"multipart/form-data\">
                      <div class=\"form-group\">          

                          <input type=\"hidden\" class=\"form-control\" name=\"id_admin\" value=\"$showadmin[id_admin]\">

                          <label class=\"col-sm-2 col-sm-2 control-label\">User Name</label>
                          <div class=\"col-sm-10\">
                              <input type=\"text\" class=\"form-control\" name=\"username\" value=\"$showadmin[username]\" oninvalid=\"alert('User name Lengkap harus di isi !');\"required>
                          </div>

                          <label class=\"col-sm-2 col-sm-2 control-label\">Password</label>
                          <div class=\"col-sm-10\">
                              <input type=\"text\" class=\"form-control\" name=\"password\" value=\"$showadmin[password]\" oninvalid=\"alert('Password harus di isi !');\"required>
                          </div>

                          </div>
                      </div>
                </table>      
                  <hr>
                      <div class=\"btn-group1\">
                          <a href=\"../../module/mod_admin/aksi.php?user=edit&id_admin=$showadmin[id_admin]#\"><button type=\"submit\" name=\"update\" class=\"btn btn-success\">Update</button></a>
                          <a href=\"#\"><button type=\"reset\" name=\"reset\" class=\"btn btn-warning\">Reset</button></a>
                      </div>
                    </form>
               </div><!-- /form-panel -->
              </div><!-- /col-md-12 -->
             </div><!-- /row mt-->
            </section>
           </section>";
}

if ($module == "update"){
    $id_user  = @$_GET['id_admin'];
    $username = @$_POST['username'];
    $password = @$_POST['password'];

    $update       = "UPDATE tbl_admin SET username='$username', password='$password' where id_admin='$id_admin'";

    if (isset($_POST['update'])) {             
               if (mysqli_query($link,$update)) {
                  echo "<script language=\"javascript\">
                           alert (\"Data Berhasil Diupdate !!\")
                           document.location=\"admin.php?tblconf=admin\";
                         </script>";               
               }else{
                  echo "<script language=\"javascript\">
                         alert (\"Gagal Update Data\")
                         document.location=\"../../module/mod_admin/admin.php?admin=edit&id_admin=$showadmin[id_admin]\";
                      </script>";
               }
           }
           mysqli_close($link);
}

if ($module=='hapus'){

    $id_user   = @$_GET['id_admin'];
    $tampil        = mysqli_query($link, "SELECT * FROM tbl_admin WHERE id_admin='$id_admin'");
    $showuser  = mysqli_fetch_array($tampil);
    
    $hapus = "DELETE FROM tbl_admin WHERE id_admin='$id_admin'";
    if (mysqli_query ($link, $hapus)) {
        echo "<script language=\"javascript\">
               alert (\"Data Berhasil Dihapus !!\")
               document.location=\"admin.php?tblconf=admin\";
              </script>";               
    }else{
        echo "<script language=\"javascript\">
               alert (\"Gagal Hapus Data\")
               document.location=\"../../module/mod_admin/aksi.php?admin=edit&id_admin=$data_admin[id_admin]\";
              </script>";
    }
     mysqli_close($link);
}

include '../../footer_module.php';
?>



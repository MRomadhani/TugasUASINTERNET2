<?php 

include '../../header_module.php';
include '../../menu_module.php';
include '../../control.php';

// MODULE pendaftaran \\
$module   = @$_GET['pendaftaran'];

if ($module == "edit"){
    $id_pendaftaran = @$_GET['id_pendaftaran'];

    $edit      = mysqli_query($link, "SELECT * FROM tbl_pendaftaran WHERE id_pendaftaran='$id_pendaftaran'");
    $showpendaftaran= mysqli_fetch_array($edit);

    echo " <section id=\"main-content\">
            <section class=\"wrapper\">
             <div class=\"row mt\">
              <div class=\"col-md-12\">
               <div class=\"form-panel\">
                <table class=\"table table-striped table-advance table-hover\">
                 <h4>[ <i class=\"fa fa-edit\"> ]</i> Detail pendaftaran</h4>
                  <hr>
                      <div class=\"form-group\">          

                          <input type=\"hidden\" class=\"form-control\" name=\"id_pendaftaran\" value=\"$showpendaftaran[id_pendaftaran]\">

                          <label class=\"col-sm-2 col-sm-2 control-label\">Nama</label>
                          <div class=\"col-sm-10\">
                              <p><i><u>$showpendaftaran[Nama]</u></i></p>
                          </div>

                          <label class=\"col-sm-2 col-sm-2 control-label\">Alamat</label>
                          <div class=\"col-sm-10\">
                              <p><i>$showpendaftaran[Alamat]</i></p>
                          </div>

                          <label class=\"col-sm-2 col-sm-2 control-label\">Tanggal Lahir</label>
                          <div class=\"col-sm-10\">
                              <p><i>$showpendaftaran[Tgl_lahir]</i></p>
                          </div>

                          <label class=\"col-sm-2 col-sm-2 control-label\">Jenis kelamin</label>
                          <div class=\"col-sm-10\">
                              <p><i>$showpendaftaran[Jenis_kelamin]</i></p>
                          </div>

                          <label class=\"col-sm-2 col-sm-2 control-label\">Email</label>
                          <div class=\"col-sm-10\">
                              <p><i>$showpendaftaran[Email]</i></p>
                          </div>

                          <label class=\"col-sm-2 col-sm-2 control-label\">No Telpon</label>
                          <div class=\"col-sm-10\">
                              <p><i>$showpendaftaran[No_hp]</i></p>
                          </div>
                          </div>
                      </div>
                </table>      
                  <hr>
                      <div class=\"btn-group1\">
                          <a href=\"../../module/mod_pendaftaran/pendaftaran.php?tbl=pendaftaran\"><button type=\"submit\" name=\"close\" class=\"btn btn-success\">Tutup</button></a>
                      </div>
               </div><!-- /form-panel -->
              </div><!-- /col-md-12 -->
             </div><!-- /row mt-->
            </section>
           </section>";
}

if ($module == "update"){
    $id_pendaftaran            = @$_GET['id_pendaftaran'];
    $nama_pendaftaran          = @$_POST['nama_pendaftaran'];
    $alamat_pendaftaran        = @$_POST['alamat_pendaftaran'];
    $tgllhr_pendaftaran        = @$_POST['tgllhr_pendaftaran'];
    $jeniskelamin_pendaftaran  = @$_POST['jeniskelamin_pendaftaran'];
    $email_pendaftaran               = @$_POST['email_pendaftaran'];
    $nohp_pendaftaran                = @$_POST['nohp_pendaftaran'];
      

    $update       = "UPDATE tbl_pendaftaran SET nama_pendaftaran='$nama_pendaftaran', alamat_pendaftaran='$alamat_inbox', tgllhr_pendaftaran='$tgllhr_pendaftaran', jeniskelamin_pendaftaran='$jeniskelamin_pendaftaran', email_pendaftaran='$email_pendaftaran', nohp_pendaftaran='$nohp_pendaftaran' where id_pendaftaran='$id_pendaftaran'";

    if (isset($_POST['update'])) {             
               if (mysqli_query($link,$update)) {
                  echo "<script language=\"javascript\">
                           alert (\"Data Berhasil Diupdate !!\")
                           document.location=\"pendaftaran.php?tbl=pendaftaran\";
                         </script>";               
               }else{
                  echo "<script language=\"javascript\">
                         alert (\"Gagal Update Data\")
                         document.location=\"../../module/mod_pendaftaran/aksi.php?pendaftaran=edit&id_pendaftaran=$showpendaftaran[id_pendaftaran]\";
                      </script>";
               }
           }
           mysqli_close($link);
}

if ($module=='hapus'){

    $id_pendaftaran   = @$_GET['id_pendaftaran'];
    $tampil        = mysqli_query($link, "SELECT * FROM tbl_pendaftaran WHERE id_pendaftaran='$id_pendaftaran'");
    $showpendaftaran = mysqli_fetch_array($tampil);
    
    $hapus = "DELETE FROM tbl_pendaftaran WHERE id_pendaftaran='$id_pendaftaran'";
    if (mysqli_query ($link, $hapus)) {
        echo "<script language=\"javascript\">
               alert (\"Data Berhasil Dihapus !!\")
               document.location=\"pendaftaran.php?tbl=pendaftaran\";
              </script>";               
    }else{
        echo "<script language=\"javascript\">
               alert (\"Gagal Hapus Data\")
               document.location=\"../../module/mod_pendaftaran/aksi.php?pendaftaran=edit&id_pendaftaran=$data_pendaftaran[id_pendaftaran]\";
              </script>";
    }
     mysqli_close($link);
}

include '../../footer_module.php';
?>



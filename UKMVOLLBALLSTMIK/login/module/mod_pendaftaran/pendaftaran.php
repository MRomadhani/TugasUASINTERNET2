<?php 
require ('../../timer_module.php');

    if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
        echo "<script>alert('Akses ditolak !!! Silahkan sign ini terlebih dahulu, Terimakasih.'); window.location = '../../index.php'</script>";
    }else{
include '../../header_module.php';
include '../../menu_module.php';
include '../../control.php';

// MODULE PENDAFTARAN \\
	echo " <section id=\"main-content\">
         	<section class=\"wrapper\">
           <div class=\"row mt\">
            <div class=\"col-md-12\">
             <div class=\"content-panel\">
              <table class=\"table table-striped table-advance table-hover\">
                <h4>[ <i class=\"fa fa-info\"> ]</i> Tabel Pendaftaran</h4>
                <hr>
                  <thead>
                  <tr>
                    <th><i class=\"\"></i> No</th>
                    <th><i class=\"\"></i> Nama</th>
                    <th><i class=\"\"></i> Alamat</th>
                    <th><i class=\"\"></i> Tanggal Lahir</th>
                    <th><i class=\"\"></i> Jenis Kelamin</th>
                    <th><i class=\"\"></i> Email</th>
                    <th><i class=\"\"></i> No Telpon</th>
                    <th><i class=\"fa fa-edit\"></i> Aksi</th>
                  </tr>
                  </thead>
                  <tbody>";


$show_pendaftaran = mysqli_query ($link, "SELECT * FROM tbl_pendaftaran ORDER BY id_pendaftaran DESC");
while ($data_pendaftaran = mysqli_fetch_assoc($tampil_pendaftaran)) {
echo"
                  <tr>
                    <td>$id_pendaftaran</td>
                    <td>$data_pendaftaran[Nama]</td>
                    <td>$data_pendaftaran[Alamat]</td>
                    <td>$data_pendaftaran[Tgl_lahir]</td>
                    <td>$data_pendaftaran[Jenis_kelamin]</td>
                    <td>$data_pendaftaran[Email]</td>
                    <td>$data_pendaftaran[No_hp]</td>
                    <td>$cetak_pendaftaran</td>
                    <td>
                      <a href=\"../../module/mod_pendaftaran/aksi.php?pendaftaran=edit&id_pendaftaran=$data_pendaftaran[id_pendaftaran]\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-search\"></i></button></a>
                      <a href=\"../../module/mod_pendaftaran/aksi.php?pendaftaran=hapus&id_pendaftaran=$data_pendaftaran[id_pendaftaran]\"><button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i></button></a>
                    </td>
                  </tr>";
                  $id_pendaftaran++;
}
                  echo"
                  </tbody>
                </table>      
                <hr>";
                 echo"<div class=\"btn-group1\">";
                    for ($i=1; $i<=$pages_pendaftaran; $i++){
                    echo"
                      <a href=\"pendaftaran.php?page=$i\"><button type=\"button\" class=\"btn btn-default\">$i</button></a>";
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

 

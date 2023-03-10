<?php
include 'control.php';
?>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                    <div class="row mtbox">
                      <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                        <div class="box1">
                  <span class="li_mail"></span>
                  <h3>+<?php echo"$total_inbox"; ?></h3>
                        </div>
                  <p><?php echo "$total_inbox Pesan terkirim ke inbox anda !"; ?></p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_camera"></span>
                  <h3>+<?php echo"$total_gallery"; ?></h3>
                        </div>
                  <p><?php echo"$total_gallery Gambar tersimpan dalam galeri album anda !"; ?></p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_user"></span>
                  <h3>+<?php echo"$total_anggotabaru"; ?></h3>
                        </div>
                  <p><?php echo"$total_anggotabaru Ada anggota baru yang ingin bergabung !"; ?></p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_news"></span>
                  <h3>+<?php echo"$total_aboutus"; ?></h3>
                        </div>
                  <p><?php echo"Ada $total_aboutus artikel terkait profil perusahaan anda sudah terekam di database !"; ?></p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_data"></span>
                  <h3>
                    <?php
                    // Menampilkan Jumlah Tabel Pada Database
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "db_ukmvoli";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 

                    $sql = "SELECT table_schema \"db_ukmvoli\",
                            ROUND(SUM(data_length + index_length) / 1024 / 1024, 1) \"DB Size in MB\" 
                            FROM information_schema.tables WHERE table_schema = 'db_ukmvoli' GROUP BY table_schema";
                    $result = $conn->query($sql);

                    if ($result=mysqli_query($conn,$sql)){
  
                      //fetch one and one row
                      while($row=mysqli_fetch_row($result)){
                        printf("%s MB <br />\n",$row[1]);

                      }
                        //free result set
                        mysqli_free_result($result);
                    }

                    $conn->close();

                    ?>
                  </h3>
                        </div><p>Kapasitas storage database saat ini !</p>                     
                      </div>
                    
                    </div><!-- /row mt -->  
                  
              
                  </div>
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
                  <h3>Pesan Terbaru</h3>
                                        
                  <!-- First Action -->
                      <?php
                      $show_pesanterbaru = mysqli_query ($link, "SELECT * FROM tbl_inbox ORDER BY tgl_masuk DESC ");
                      while ($data_pesanterbaru = mysqli_fetch_assoc($tampil_pesanterbaru)) {
                      $kalimat_pesanterbaru  = $data_pesanterbaru['message_inbox'];  
                      $cetak_pesanterbaru    = substr($kalimat_pesanterbaru, 0, 30);
                      echo "
                      <div class=\"desc\">
                      <div class=\"thumb\">
                      <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
                      </div>
                      <div class=\"details\">
                        <p><muted>$data_pesanterbaru[tgl_masuk]</muted><br/>
                           <a href=\"module/mod_inbox/aksi.php?inbox=edit&id_inbox=$data_pesanterbaru[id_inbox]\">$data_pesanterbaru[nama]</a> - $data_pesanterbaru[komen]<br/>
                           $cetak_pesanterbaru
                        </p>
                      </div>
                      </div>";
                      }
                      ?>
                        
                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar-->
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              <?php echo date ("Y"); ?>  - Theme MANG ADOEL
              <a href="template.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

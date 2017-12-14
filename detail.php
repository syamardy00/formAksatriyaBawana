<?php
$id = 'id';
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
    
        }   
$a=mysql_query("SELECT * FROM calonanggota2017 WHERE id_daftar='$id'");
$aa=mysql_fetch_array($a);
?>
    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="index.php" style="color:#84c126"><i class="icon-chevron-right"></i> Registration Form</a></li>
          <li><a href="index.php?page=dataview" style="background-color:#84c126; color:#fff"><i class="icon-chevron-right"></i> View Data Registered</a></li>
          <li><img src="bootstrap/img/abs.jpg" class="img-rounded" style="margin-top:20px;"></li>
        </ul>
<!--         <ul class="nav nav-list bs-docs-sidebar" >
        <li><a href="#" style="color:#84c126;"><img src="bootstrap/img/abs.jpg" width="107%" class="img-rounded" style="margin-left:-15px;"></a></li>
        </ul> -->
      </div>
      <div class="span9">



        <!-- Typography
        ================================================== -->
        <section id="typography">
          <div class="page-header">
            <h1>View Detail</h1>
          </div>
          <form action="simpan.php" method="POST" style="background-color:rgba(000, 000, 000, 0.8); padding:30px; padding-left: 50px; border-radius:8px;color:#84c126">
            <fieldset>
                <div class="row">
                    <div class="span4">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama Lengkap..." class="span4" id="disabledInput" readonly required="true" 
                        value="<?php echo"$aa[nama]"; ?>">
                    </div>
                    <div class="span4">
                        <label>Tanggal Lahir</label>
                        <input type="text" name="tgllahir" class="span4" id="disabledInput" readonly value="<?php echo"$aa[tgllahir]"; ?>">
                    </div>
                </div>
                <br>
                <!-- <br> -->
                <div class="row">
                    <div class="span4">
                        <label>Jenis Kelamin</label>
                        <input type="text" name="jenkel" class="span4" id="disabledInput" readonly value="<?php echo"$aa[jeniskelamin]"; ?>">
                    </div>
                    <div class="span4">
                        <label>Jurusan
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                        Angkatan</label>
                        <input type="text" name="jurusan" id="disabledInput" readonly class="span3" value="<?php echo"$aa[jurusan]"; ?>">
                        <input type="text" name="angkatan"  id="disabledInput" readonly class="span1" value="<?php echo"$aa[angkatan]"; ?>">
                    </div>
                </div>
                <br><!-- <br> -->
                <div class="row">
                    <div class="span4">
                        <label> Hobbi</label>
                        <input type="text" class="span4" name="hobbi" id="disabledInput" readonly placeholder="hobbi" required="true" 
                        value="<?php echo"$aa[hobbi]"; ?>">
                    </div>
                    <div class="span4">
                        <label> Email</label>
                        <input type="email" class="span4" name="email" id="disabledInput" readonly placeholder="Example@exp.com" required="true"
                        value="<?php echo"$aa[email]"; ?>">
                    </div>
                </div>
                <br>
                <!-- <br> -->
                <div class="row">
                    <div class="span4">
                        <label> Alamat</label>
                        <textarea class="span4" rows="3" name="alamat" id="disabledInput" readonly required="true"><?php echo"$aa[alamat]"; ?></textarea>
                    </div>
                    <div class="span4">
                        <label>Alasan Ingin Menjadi Anggota MPA Aksatriya Bawana</label>
                        <textarea class="span4" rows="3" name="alasan" id="disabledInput" readonly required="true"><?php echo"$aa[alasan]"; ?></textarea>
                    </div>
                </div>
                <br><!-- <br> -->
                <div class="row">
                    <div class="span4">
                        <label>Kontak Yg Bisa Dihubungi</label>
                            <input type="text" name="notlp" required="true" id="disabledInput" readonly class="span3" placeholder="No Telepon..." 
                            value="<?php echo"$aa[notlp]"; ?>">
                            <input type="text" name="bbm" class="span2" id="disabledInput" readonly placeholder="PIN BBM..."
                            value="<?php echo"$aa[pinbb]"; ?>">
                    </div>
                    <div class="span4">
                        <label>Asal Sekolah</label>
                        <input type="text" name="asalsekolah"  class="span4" placeholder="Asal Sekolah..." id="disabledInput" readonly class="span3" placeholder="No Telepon..." value="<?php echo"$aa[asalsekolah]"; ?>">
                    </div>
                </div>
                <br><!-- <br> -->
                <div class="row">
                    <div class="span8">
                        <label>Riwayat Organisasi Pencinta Alam</label>
                        <fieldset style="border:1px solid #84c126; padding:5px;">
                        <?php
                            if($aa['riwayat']=="belum"){
                                ?>
                                <label class="radio">
                                    <input type="radio" name="riwayat" id="optionsRadios1" id="disabledInput"  value="belum" checked>
                                    Saya belum pernah mengikuti organisasi pencinta alam.
                                </label>
                                <label class="radio">
                                    <input type="radio" name="riwayat" id="optionsRadios2" id="disabledInput"  value="pernah">
                                    Saya pernah mengikuti organisasi pencinta alam.
                                </label>
                                <?php
                            }else{
                                ?>
                                <label class="radio">
                                    <input type="radio" name="riwayat" id="optionsRadios1" id="disabledInput"  value="belum">
                                    Saya belum pernah mengikuti organisasi pencinta alam.
                                </label>
                                <label class="radio">
                                    <input type="radio" name="riwayat" id="optionsRadios2" id="disabledInput"  value="pernah" checked>
                                    Saya pernah mengikuti organisasi pencinta alam.
                                </label>
                                <?php
                            }
                        ?>
                        </fieldset>
                        </form>
                    </div>
                </div>
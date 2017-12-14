    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="index.php" style="background-color:#84c126; color:#fff"><i class="icon-chevron-right"></i> Registration Form</a></li>
          <!-- <li><a href="index.php?page=dataview" style="color:#84c126;"><i class="icon-chevron-right"></i>View Data Registered</a></li> -->
          <li><img src="bootstrap/img/abs.jpg" class="img-rounded" style="margin-top:20px;"></li>
        </ul>
        <!-- <ul class="nav nav-list bs-docs-sidebar">
        <li><img src="bootstrap/img/abs.jpg" width="100%;" class="img-rounded" style="margin-left:-15px; width:200%; background-color:black;"></li>
        </ul> -->
      </div>
      <div class="span9">



        <!-- Typography
        ================================================== -->
        <section id="typography">
          <div class="page-header">
            <h1>Registration Form</h1>
          </div>

        <!-- Form -->
        <form action="simpan.php" method="POST" style="background-color:rgba(000, 000, 000, 0.8); padding:30px; padding-left: 50px; border-radius:8px;">
            <fieldset>
                <div class="row">
                    <div class="span4">
                        <label style="color:#84c126"><b>Nama Lengkap<b></label>
                        <input type="text" name="nama" placeholder="Nama Lengkap..." class="span4" required="true">
                    </div>
                    <div class="span4">
                        <label style="color:#84c126"><b>Tanggal Lahir</label>
                        <select class="span1" name="tgl">
                            <?php 
                            $i=1;
                            while($i<=31){
                                echo"<option> $i </option>";
                                $i++;
                            }
                            ?>
                        </select>
                        -
                        <select class="span2" name="bulan">
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                        </select>
                        -
                        <select class="span1" name="tahun">
                            <?php 
                            $th=2017;
                            while($th>=1945){
                                echo"<option> $th </option>";
                                $th--;
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <br>
         <!--        <br> -->
                <div class="row">
                    <div class="span4">
                        <label style="color:#84c126"><b>Jenis Kelamin</label>
                        <select class="span4" name="jeniskelamin">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                            <option>Lain-Lain</option>
                        </select>
                    </div>
                    <div class="span4">
                        <label style="color:#84c126"><b>Jurusan
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                        <b>Angkatan</label>
                        <select class="span3" name="jurusan">
                            <option>Teknik Kontruksi Bangunan</option>
                            <option>Teknik Komputer</option>
                            <option>Teknik Informatika</option>
                            <option>Teknik Mesin</option>
                            <option>Mekanik Industri Dan Desain</option>
                            <option>Mesin Otomotif</option>
                            <option>Teknik Elektro</option>
                            <option>Teknik Otomasi</option>
                            <option>Teknik Kimia</option>
                            <option>Akuntansi</option>
                            <option>Komputerisasi Akuntansi</option>
                            <option>Rekam Medis dan Infokes</option>
                            <option>Alat Berat</option>
                        </select>
                        <select class="span1" name="angkatan">
                            <?php 
                            $th=2017;
                            while($th>=2001){
                                echo"<option> $th </option>";
                                $th--;
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <br><!-- <br> -->
                <div class="row">
                    <div class="span4">
                        <label style="color:#84c126"> <b>Hobbi</label>
                        <input type="text" class="span4" name="hobbi" placeholder="hobbi" required="true">
                    </div>
                    <div class="span4">
                        <label style="color:#84c126"> <b>Email</label>
                        <input type="email" class="span4" name="email" placeholder="Example@exp.com" required="true">
                    </div>
                </div>
                <br>
              <!--   <br> -->
                <div class="row">
                    <div class="span4">
                        <label style="color:#84c126"> <b>Alamat</label>
                        <textarea class="span4" rows="3" name="alamat" required="true"></textarea>
                    </div>
                    <div class="span4">
                        <label style="color:#84c126"> <b>Alasan Ingin Menjadi Anggota MPA Aksatriya Bawana</label>
                        <textarea class="span4" rows="3" name="alasan" required="true"></textarea>
                    </div>
                </div>
                <br><!-- <br> -->
                <div class="row">
                    <div class="span4">
                        <label style="color:#84c126"><b>Kontak Yg Bisa Dihubungi</label>
                            <input type="text" name="notlp" required="true" class="span2" placeholder="No Telepon...">
                            <input type="text" name="bbm" class="span2" placeholder="WhatsApp / BBM">
                    </div>
                    <div class="span4">
                        <label style="color:#84c126"><b>Asal Sekolah</label>
                        <input type="text" name="asalsekolah"  class="span4" placeholder="Asal Sekolah...">
                    </div>
                </div>
                <br>
                <!-- <br> -->
                <div class="row">
                    <div class="span8">
                        <label style="color:#84c126"><b>Riwayat Organisasi Kepencinta Alaman</label>
                        <fieldset style="border:1px solid #84c126; padding:5px;">
                            <label class="radio">
                                <input type="radio" name="riwayat" id="optionsRadios1" value="belum" checked>
                                <b style="color:#84c126">Saya belum pernah mengikuti organisasi pencinta alam.
                            </label>
                            <label class="radio">
                                <input type="radio" name="riwayat" id="optionsRadios2" value="pernah">
                                <b style="color:#84c126">Saya pernah mengikuti organisasi pencinta alam.
                            </label>
                        </fieldset>
                    </div>
                </div>
                <br><hr>
                <div class="row">
                    <div class="span8">
                        <input type="submit" class="btn btn-large btn-block btn-success" value="Register">
                        <input type="reset" class="btn btn-large btn-block" value="Reset Data">
                    </div>
                </div>
            </fieldset>
        </form>
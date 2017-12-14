    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="index.php" style="color:#84c126"><i class="icon-chevron-right"></i> Registration Form</a></li>
          <li><a href="index.php?page=dataview" style="background-color:#84c126; color:#fff"><i class="icon-chevron-right"></i> View Data Registered</a></li>
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
            <h1>View Data Registered</h1>
          </div>

        <!-- Form -->
        <form action="simpan.php" method="POST" style="background-color:rgba(000, 000, 000, 0.8); padding:2px; border-radius:8px; min-height:500px;">
            <fieldset>
                <div class="row">
                    <div class="span9">
						<table class="table">
			        		<tr  style="color:#84c126">
				        		<th>NO</th>
				        		<th>NAMA</th>
				        		<th>JURUSAN</th>
				        		<th>ANGKATAN</th>
				        		<th>EMAIL</th>
				        		<th>NO TELEPON</th>
				        		<th>PIN BBM /<br> NO WA</th>
				        		<th><center><b>Action</b></center></th>
			 	       		</tr>
			        		<?php
			        			$q=mysql_query("SELECT * FROM calonanggota2017 ORDER BY id_daftar ASC");
			        			$no=1;
			        			while ($qq=mysql_fetch_array($q)) {
			        				echo"
			        				<tr  style='color:#fff'>
			        					<td>$no</td>
			        					<td>$qq[nama]</td>
			        					<td>$qq[jurusan]</td>
			        					<td>$qq[angkatan]</td>
			        					<td>$qq[email]</td>
			        					<td>$qq[notlp]</td>
			        					<td>$qq[pinbb]</td>
			        					<td><a href='index.php?page=detail&id=$qq[id_daftar]' class='btn btn-info'>Detail</a></td>
			        				</tr>
			        				";
			        				$no++;
			        			}
			        		?>
			        	</table>
                    </div>
                </div>
            </fieldset>
        </form>
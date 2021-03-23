 
  <div class="row-fluid">
	<div class="span3 well" style="background-color:   #d5f5e3 ;">
		<img src="img/a.jpg" id="gambar">
		 <br /><br /><br />
		<form method="post" action="checklogin.php">
			<label>
				<input name="username" id="username" type="text" value="" placeholder="Username..." class="span12" autofocus>
			</label>
			<label>
				<input name="password" id="password" type="password" value="" placeholder="Password..." class="span12">
			</label>
			<label>
				<select name="type" class="span12">
				  <option value=1>Petugas</option>
				  <option value=2>Dosen</option>
				  <option value=3>Mahasiswa</option>
				</select>
			</label>
			<label>
				<input name="login" id="login" type="submit" value="Login" class="btn btn-block btn-inverse">
			</label>
			<label>
				<a href="register.php?mode=register" rel="tooltip" title="Daftar" class="btn btn-large btn-success">
				<i class="icon-user icon-white"></i> Daftar
			    </a>
			</label>
			<label>
				 <small>Login | Register Terlebih Dahulu</small>
				 <br /><p>-----------------------------------------</p>
			</label>
			
		</form>
		 <div class="box">
				 	<marquee direction="left"><p>WARNING: Untuk batas peminjaman buku adalah maks 1 x 2 buku / hari</p></marquee>
			</div>
	</div><!--/span-->
	<div class="span9 well" id="main-content" style="background-color:   #d5f5e3 ;">
	  <div class="row-fluid">
		<div class="span12">
		
		  <?php 
			if(!isset($page)) {
		  ?>
			  <h2>Hallo, Selamat Datang</h2>
			   <img src="img/lgi.jpg" id="gambar">
			  <br />
		  <?php

			} else
				include("includes/p_". $page .".php"); 
		  ?>
		  
		</div><!--/span-->
	  </div><!--/row-->
	</div><!--/span-->
  </div><!--/row-->
  
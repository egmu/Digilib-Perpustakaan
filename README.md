 <h1 align="center">Digital Library </h1>
    <br>

# Installasi
```bash
	> git clone https://github.com/egmu/Digilib-Perpustakaan.git
	> Create a database
	> inport file: digilib.sql into database
```

# Change File
## replace in files: config.php and MySQL.php
```json
	<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "DataBase";
?>
```

# USER ACCOUNT LOGIN
```bash
	> Petugas 	= admin : admin
	> Dosen		= dosen : dosen
	> Mahasiswa	= deny	: deny
```
	* Dapat diubah di melalui akun petugas
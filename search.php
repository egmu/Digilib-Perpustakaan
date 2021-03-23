<?php
	require_once("config/config.php");
	if(isset($_GET['q'])){
		mysqli_connect($host,$user,$password);
		mysqli_select_db($database);
		
		$param = mysqli_escape_string($_GET['q']); 
		$query = mysqli_query("SELECT nip, nama FROM dosen WHERE nama LIKE '%$param%'") or die(mysqli_error());		
		if(mysqli_num_rows($query) > 0){
			$data = array();
			while($row = mysqli_fetch_object($query)){
				$data[] = $row;
			}
			die(json_encode($data)); 
		}
	}
?>

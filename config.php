<?php 
	$db = new mysqli("localhost","root","","thekingc_infokerja");
	if($db->connect_error){
		echo "Connection".$db->connect_error;
	}
?>
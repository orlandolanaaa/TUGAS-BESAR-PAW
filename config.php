<?php 
	$db = new mysqli("localhost","thekingc_infoker","infokerja12","thekingc_infokerja");
	if($db->connect_error){
		echo "Connection".$db->connect_error;
	}
?>
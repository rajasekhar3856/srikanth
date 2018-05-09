<?php
	require_once('dbconn.php');
	$menus_qry = mysqli_query($dbconn,"select * from menu");
	while($record = mysqli_fetch_array($menus_qry)){
		$menus[$record['parent']][$record['id']] = $record;
	}
?>
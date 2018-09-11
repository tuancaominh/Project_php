<?php
	$id = $_GET['iid'];
	$sql = "delete from image where image_id = '$id'";
	mysql_query($sql);
	header("location:".BASEURL."admin/quantri.php?page=image&act=list");
	exit();
?>
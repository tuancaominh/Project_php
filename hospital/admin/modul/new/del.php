<title>Xóa tin tức</title>
<?php
	$id = $_GET['nid'];
	$sql = "delete from news where news_id = '$id'";
	mysql_query($sql);
	header("location:".BASEURL."admin/quantri.php?page=new&act=list");
	exit();
?>
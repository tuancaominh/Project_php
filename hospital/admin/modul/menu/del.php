<title>Xóa danh mục</title>
<h4>Xóa danh mục</h4>
<?php
	$id = $_GET['mid'];
	$sql = "delete from menu where menu_id = '$id'";
	mysql_query($sql);
	header("location:".BASEURL."admin/quantri.php?page=menu&act=list");
	exit();
?>
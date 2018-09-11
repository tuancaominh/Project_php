<title>Xóa danh mục</title>
<h4>Xóa danh mục</h4>
<?php
	$id = $_GET['did'];
	$sql = "delete from danhmuc where danhmuc_id = '$id'";
	mysql_query($sql);
	header("location:".BASEURL."admin/quantri.php?page=danhmuc&act=list");
	exit();
?>
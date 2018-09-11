<title>Xóa thành viên</title>
<h4>Xóa thành viên</h4>
<?php
	$id = $_GET['baid'];
	//echo $id;
	$sql = "delete from benhnhan where benhnhan_id = '$id'";
	mysql_query($sql);
	header("location:".BASEURL."admin/quantri.php?page=benhnhan&act=list");
	exit(); 
?>
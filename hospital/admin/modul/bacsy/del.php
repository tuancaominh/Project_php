<title>Xóa thành viên</title>
<h4>Xóa thành viên</h4>
<?php
	$id = $_GET['uid'];
	//echo $id;
	$sql = "delete from user where user_id = '$id'";
	mysql_query($sql);
	header("location:".BASEURL."admin/quantri.php?page=user&act=list");
	exit(); 
?>
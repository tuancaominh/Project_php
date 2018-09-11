<?php
	require("../libraries/config.php");
	session_start();
?>
<?php
	$name = $_POST['name'];
	$pass = md5($_POST['pass']);
	$sql = "select *from user where user_taikhoan = '$name' and user_matkhau = '$pass'";
	$result = mysql_query($sql);
	$numrows = mysql_num_rows($result);
	$data = mysql_fetch_assoc($result);
	if($numrows == 1){
		$_SESSION['id'] = $data['user_id'];	
		$_SESSION['level'] = $data['user_level'];	
		$_SESSION['status'] = $data['user_trangthai'];	
		$_SESSION['fullname'] = $data['user_tendaydu'];
		echo 1;	
	}
<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phòng Khám Việt Hàn</title>
<link href="css/login.css" rel="stylesheet" type="text/css" />
<link href="css/drank.css" rel="stylesheet" type="text/css" />
<script src="ajax/ajax.js"></script>
<!--style>
	body{ background:url(../images/alpha_03.jpg) repeat}
	ul li{ list-style-type:none}
	#main{ width:500px; height:200px; margin:0px auto; margin-top:200px; border:1px solid #999; background:url(../images/background_03.png) repeat}
	#main_login{ width:300px; height:160px; margin:0px auto; margin-top:40px}
	.new{ position:absolute; top: 0px; left:0px; background:url(../images/vectordep.vn_hoavan_eps_122.gif); height:200px; width:200px}
</style!-->
<script type="text/javascript">
	function login(){
		$name = document.getElementById("user_name").value;
		$pass = document.getElementById("user_pass").value;
		if($name == "" || $pass == ""){
			document.getElementById("errors").innerHTML = "Vui lòng nhập đầy đủ thông tin";
			return false;
		}else{
			errors($name,$pass);	
		}
	}
</script>
</head>

<body>
<?php require("../libraries/config.php"); ?>
<!--?php
	function debug($val){
		echo "<pre>";
		print_r($val);
		echo "</pre>";
		die();
	}
	if(isset($_POST['ok'])){
		$name = "";
		$pass = "";
		if($_POST['user_name'] == ""){
			die("Bạn chưa nhập tên User");
		}else{
			$name = $_POST['user_name'];
		}
		if($_POST['user_pass'] == ""){
			die("Bạn chưa nhập Password");	
		}else{
			$pass = md5($_POST['user_pass']);
		}
		$sql = "select * from user where user_taikhoan = '".$name."' and user_matkhau = '".$pass."' and user_level = '1'" ;
		//echo $sql; die();
		$result = mysql_query($sql);
		//$data = mysql_fetch_assoc($result);
		$numrow = mysql_num_rows($result);
		//debug($numrow);
		if($numrow == 1){ // Đúng username và password
			$data = mysql_fetch_assoc($result); //thừa 
			$_SESSION['id'] = $data['user_id'];
			$_SESSION['level'] = $data['user_level'];
			$_SESSION['fullname'] = $data['user_tendaydu'];
			header("location:".BASEURL."admin/quantri.php");
			exit();
			
		}else{
			die("Sai tên tài khoản hoặc mật khẩu!");
		}
	}
? !-->
<body>
	<!--[if !IE]>start wrapper<![endif]-->
	<div id="wrapper">
	<div id="wrapper2">
	<div id="wrapper3">
	<div id="wrapper4">
	<span id="login_wrapper_bg"></span>
	
	<div id="stripes">	
		<!--[if !IE]>start login wrapper<![endif]-->
		<div id="login_wrapper">
			<div class="error">
				<div class="error_inner">
					<strong>Access Denied</strong> | <span>user/password combination wrong</span>
				</div>
			</div>	
			<!--[if !IE]>start login<![endif]-->
            <font color="red"></font><form action="javascript:void(0)" method="post">
				<fieldset>		
					<h1>Please log in</h1>
					<div class="formular">
						<span class="formular_top"></span>
						
						<div class="formular_inner">
						<div id="errors" style="color:#F00"></div>
						<label>
							<strong>Username:</strong>

							<span class="input_wrapper">
								<input id="user_name" type="text">
							</span>
						</label>
						<label>
							<strong>Password:</strong>
							<span class="input_wrapper">
								<input id="user_pass" type="password">

							</span>
						</label>
						<label class="inline">
							<input class="checkbox" name="ok" type="checkbox" value="" >
							remember me on this computer
						</label>	
						<ul class="form_menu">
							<li><span class="button"><span><span><em>Đồng ý</em></span></span><input type="submit" onclick="return login()"></span></li>
							<li><span class="button"><span><span><a href="#">Quay lại</a></span></span></span></li>
						</ul>
						
						</div>
						
						<span class="formular_bottom"></span>
						
					</div>
				</fieldset>
			</form>
			<!--[if !IE]>end login<![endif]-->
			
			<!--[if !IE]>start reflect<![endif]-->
			<span class="reflect"></span>
			<span class="lock"></span>
			<!--[if !IE]>end reflect<![endif]-->	
		</div>

		<!--[if !IE]>end login wrapper<![endif]-->
	    </div>
		</div>
     	</div>
		</div>	
	</div>
	<!--[if !IE]>end wrapper<![endif]-->

</body>
</body>
</html>

<title>Thêm thành viên</title>
<?php
	if(isset($_POST['ok'])){
		if($_POST['username'] == NULL){
			die("Bạn chưa nhập tên đăng nhập");	
		}else{
			$name = $_POST['username'];	
		}
		if($_POST['userpass'] == NULL){
			die("Bạn chưa nhập mật khẩu");	
		}else{
			$pass = md5($_POST['userpass']);	
		}
		if($_POST['userrep'] == NULL){
			die("Bạn chưa nhập lại mật khẩu");	
		}else{
			if($_POST['userpass'] != $_POST['userrep']){
				die("Mật khẩu không khớp");	
			}	
		}
		if($_POST['usermail'] == NULL){
			die("Bạn chưa nhập địa chỉ mail");
		}else{
			$mail = $_POST['usermail'];	
		}
		$fullname = $_POST['userfullname'];
		$gender = $_POST['usergender'];
		$phone = $_POST['userphone'];	
		$level = $_POST['userlevel'];
		$trangthai = $_POST['usertrangthai'];
		$sql_name = "select *from user where user_taikhoan = '$name'";
		$result_name = mysql_query($sql_name);
		$sql_mail = "select *from user where user_email = '$mail'";
		$result_mail = mysql_query($sql_mail);
		if(mysql_num_rows($result_name) > 0){
			die("Tài khoản đã tồn tại");
		}
		if(mysql_num_rows($result_mail) > 0){
			die("Email này đã tồn tại");	
		}else{
			$sql = "insert into 			    user(user_taikhoan,user_matkhau,user_tendaydu,user_gioitinh,user_phone,user_email,user_level,user_trangthai) values('$name','$pass','$fullname','$gender','$phone','$mail','$level','$trangthai')";
			//echo $sql;
			//die;
			mysql_query($sql);
			header("location:".BASEURL."admin/quantri.php?page=user&act=list");	
		}		
	}
?>
<h3>Thêm mới thành viên</h3>
<br/>
<br/>
<form action="<?php echo BASEURL."admin/quantri.php?page=user&act=add";?>" method="post">
	<table width="408" height="287" border="1">
  <tr>
    <td width="135" height="46">Tên đăng nhập</td>
    <td width="214"><input type="text" name="username" /></td>
  </tr>
  <tr>
    <td>Mật khẩu</td>
    <td>
      <input type="password" name="userpass" />
    </td>
  </tr>
  <tr>
    <td>Nhập lại mật khẩu</td>
    <td>
      <input type="password" name="userrep" />
    </td>
  </tr>
  <tr>
    <td>Tên đầy đủ</td>
    <td>
      <input type="text" name="userfullname" />  
    </td>
  </tr>
  <tr>
    <td>Giới tính</td>
    <td>
      <select name="usergender">
      	<option value="1">Nam</option>
        <option value="0">Nữ</option>
      </select>  
    </td>
  </tr>
  <tr>
    <td>Số điện thoại</td>
    <td>
      <input type="text" name="userphone" />  
    </td>
  </tr>
  <tr>
    <td>Email</td>
    <td>
      <input type="text" name="usermail" />
    </td>
  </tr>
  <tr>
    <td>Level</td>
    <td>
    	<select name="userlevel">
      		<option value="1">Admin</option>
        	<option value="2">Menber</option>
      	</select>  
    </td>
  </tr>
  <tr>
    <td>Trạng thái</td>
    <td>
    	<select name="usertrangthai">
      		<option value="1">Kích Hoạt</option>
        	<option value="0">Tắt</option>
      	</select>  
    </td>
  </tr>
  <tr>
     <td>
        <input type="submit" name="ok"  value="Thêm mới" /> 
        <input type="reset" name="reset" value="Nhập lại" />
     </td>
  </tr>
</table>

</form>
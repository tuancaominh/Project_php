<title>Sửa thành viên</title>
<?php
	$id = $_GET['uid'];
	$sql = "select * from user where user_id = '$id'";
	$result = mysql_query($sql);
	$data = mysql_fetch_assoc($result);
	
	if(isset($_POST['ok'])){
		if($_POST['username'] == NULL){
			die("Bạn chưa nhập tên tài khoản");	
		}else{
			$name = $_POST['username'];	
		}
		if($_POST['userpass'] != NULL){
			if($_POST['userrep'] == NULL){
				die("Bạn chưa nhập lại mật khẩu");
			}else{
				if($_POST['userpass'] != $_POST['userrep']){
					die("Mật khẩu không khớp");	
				}else{
					$pass = md5($_POST['userpass']);	
				}	
			}	
		}
		$fullname = $_POST['userfullname'];
		$phone = $_POST['userphone'];
		$gender = $_POST['usergender'];
		if($_POST['usermail'] == NULL){
			die("Bạn chưa nhập Email");	
		}else{
			$mail = $_POST['usermail'];	
		}
		if($_POST['userlevel'] == NULL){
			die("Bạn chưa chọn level");	
		}else{
			$level = $_POST['userlevel'];	
		}	
		if($_POST['usertrangthai'] == NULL){
			die("Bạn chưa chọn trạng thái");	
		}else{
			$trangthai = $_POST['usertrangthai'];	
		}
		$sql_name = "select * from user where user_taikhoan = '$name' and user_id != '$id'";
		$result_name = mysql_query($sql_name);
		$sql_email = "select * from user where user_email = '$mail' and user_id != '$id'";
		$result_mail = mysql_query($sql_email);
		if(mysql_num_rows($result_name) > 0){
			die("Tài khoản đã tồn tại");	
		}
		if(mysql_num_rows($result_mail) > 0){
			die("Email đã tồn tại");	
		}else{
			if($_POST['userpass'] != NULL){
				$sql = "update user set user_taikhoan = '$name',user_matkhau = '$pass',user_tendaydu = '$fullname',user_phone = '$phone',user_gioitinh = '$gender',user_email = '$mail',user_level = '$level',user_trangthai = '$trangthai' where user_id = '$id'";	
			}else{
				$sql = "update user set user_taikhoan = '$name',user_tendaydu = '$fullname',user_phone = '$phone',user_gioitinh = '$gender',user_email = '$mail',user_level = '$level',user_trangthai = '$trangthai' where user_id = '$id'";		
			}
			//echo $sql;
			//die;
			mysql_query($sql);
			header("location:".BASEURL."admin/quantri.php?page=user&act=list");
			exit();
		}
	}
?>
<h3>Sửa thành viên</h3>
<br/>
<br/>
<form action="<?php echo BASEURL."admin/quantri.php?page=user&act=edit&uid=".$id;?>" method="post">
	<table width="408" height="287" border="1">
  <tr>
    <td width="135" height="46">Tên đăng nhập</td>
    <td width="214"><input type="text" name="username" value="<?php echo $data['user_taikhoan'];?>" /></td>
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
      <input type="text" name="userfullname" value="<?php echo $data['user_tendaydu']; ?>" />  
    </td>
  </tr>
  <tr>
    <td>Giới tính</td>
    <td>
      <select name="usergender">
      	<option value="1" <?php if($data['user_gioitinh'] == 1){ echo 'selected';} ?>>Nam</option>
        <option value="0" <?php if($data['user_gioitinh'] == 0){ echo 'selected';} ?>>Nữ</option>
      </select>  
    </td>
  </tr>
  <tr>
    <td>Số điện thoại</td>
    <td>
      <input type="text" name="userphone" value="<?php echo $data['user_phone'];?>" />  
    </td>
  </tr>
  <tr>
    <td>Email</td>
    <td>
      <input type="text" name="usermail" value="<?php echo $data['user_email'];?>" />
    </td>
  </tr>
  <tr>
    <td>Level</td>
    <td>
    	<select name="userlevel">
      		<option value="1" <?php if($data['user_level'] == 1){ echo 'selected';}?>>Admin</option>
        	<option value="2" <?php if($data['user_level'] == 2){ echo 'selected';}?>>Menber</option>
      	</select>  
    </td>
  </tr>
  <tr>
    <td>Trạng thái</td>
    <td>
    	<select name="usertrangthai">
      		<option value="1" <?php if($data['user_trangthai'] == 1){ echo 'selected';}?>>Kích Hoạt</option>
        	<option value="0" <?php if($data['user_trangthai'] == 0){ echo 'selected';}?>>Tắt</option>
      	</select>  
    </td>
  </tr>
  <tr>
     <td>
        <input type="submit" name="ok"  value="Sửa lại" /></td>
  </tr>
</table>

</form>
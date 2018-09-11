<title>Sửa thành viên</title>
<?php
	$id = $_GET['baid'];
	$sql = "select * from benhnhan where benhnhan_id = '$id'";
	$result = mysql_query($sql);
	$data = mysql_fetch_assoc($result);
	
	if(isset($_POST['ok'])){
		
				$sql = "update user set user_taikhoan = '$name',user_tendaydu = '$fullname',user_phone = '$phone',user_gioitinh = '$gender',user_email = '$mail',user_level = '$level',user_trangthai = '$trangthai' where user_id = '$id'";		
			mysql_query($sql);
			header("location:".BASEURL."admin/quantri.php?page=benhnhan&act=list");
			exit();
	}
?>
<h3>Sửa bệnh án</h3>
<br/>
<br/>
<form action="<?php echo BASEURL."admin/quantri.php?page=benhnhan&act=edit&baid=".$id;?>" method="post">
	<table width="408" height="287" border="1">
  <tr>
    <td width="135" height="46">Tên Bệnh Nhân</td>
    <td width="214"><input type="text" name="username" value="<?php echo $data['user_taikhoan'];?>" /></td>
  </tr>
  <tr>
    <td>Tuổi Bệnh nhân</td>
    <td>
      <input type="password" name="userpass" />
    </td>
  </tr>
  <tr>
    <td>Quê Bệnh Nhân</td>
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
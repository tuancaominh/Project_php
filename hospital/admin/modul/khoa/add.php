<title>Thêm thành viên</title>
<?php
	if(isset($_POST['ok'])){
		if($_POST['name'] == NULL){
			die("Bạn chưa nhập tên Khoa");	
		}else{
			$name = $_POST['name'];	
		}
		$trangthai = $_POST['trangthai'];
		$sql_name = "select *from chuyenkhoa where ten_khoa = '$name'";
		$result_name = mysql_query($sql_name);
		if(mysql_num_rows($result_name) > 0){
			die("Tài khoản đã tồn tại");
		}else{
			$sql = "insert into chuyenkhoa(ten_khoa,trangthai) values('$name','$trangthai')";
			//echo $sql;
			//die;
			mysql_query($sql);
			header("location:".BASEURL."admin/quantri.php?page=khoa&act=list");	
		}		
	}
?>
<h3>Thêm mới Khoa</h3>
<br/>
<br/>
<form action="<?php echo BASEURL."admin/quantri.php?page=khoa&act=add";?>" method="post">
	<table width="408" height="267" border="1">
  <tr>
    <td width="146" height="46">Tên khoa</td>
    <td width="246"><input type="text" name="name" /></td>
  </tr>
  <tr>
    <td height="88">Trạng thái</td>
    <td>
      <select name="trangthai">
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
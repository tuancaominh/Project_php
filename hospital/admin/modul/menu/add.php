<title>Thêm danh mục</title>
<?php
	if(isset($_POST['ok'])){
		if($_POST['danhmuc_name'] == NULL){
			die("Bạn chưa nhập tên danh mục");	
		}else{
			$name = $_POST['danhmuc_name'];	
		}
		if($_POST['danhmuc_oder'] == NULL){
			die("Bạn chưa nhập thứ tự danh mục");	
		}else{
			$oder = $_POST['danhmuc_oder'];	
		}
		$trangthai = $_POST['danhmuctrangthai'];
		$sql_name = "select * from danhmuc where danhmuc_ten = '$name'";
		$result_name = mysql_query($sql_name);
		if(mysql_num_rows($result_name) > 0){
			die("Danh mục đã tồn tại");
		}else{
			$sql = "insert into menu(menu_name,menu_order,menu_trangthai) values('$name','$oder','$trangthai')";
			mysql_query($sql);
			header("location:".BASEURL."admin/quantri.php?page=menu&act=list");	
		}		
	}
?>
<h3>Thêm mới danh mục</h3>
<br/>
<br/>
<form action="<?php echo BASEURL."admin/quantri.php?page=menu&act=add";?>" method="post">
	<table width="408" height="195" border="1">
  <tr>
    <td width="157" height="46">Tên menu</td>
    <td width="235"><input type="text" name="danhmuc_name" /></td>
  </tr>
  <tr>
    <td height="54">Thứ tự</td>
    <td>
      <input type="text" name="danhmuc_oder" />
    </td>
  </tr>
  <tr>
    <td height="46">Trạng thái</td>
    <td>
      <select name="danhmuctrangthai">
        <option value="1">Kích Hoạt</option>
        <option value="0">Tắt</option>
        </select>  
      </td>
  </tr>
  <tr>
     <td height="37">
        <input type="submit" name="ok"  value="Thêm mới" /> 
        <input type="reset" name="reset" value="Nhập lại" />
     </td>
  </tr>
</table>
</form>
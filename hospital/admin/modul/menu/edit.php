<title>Sửa danh mục</title>
<?php
	$id = $_GET['mid'];
	$sql = "select * from menu where menu_id = '$id'";
	$result = mysql_query($sql);
	$data = mysql_fetch_assoc($result);
		
	if(isset($_POST['ok'])){
		if($_POST['menu_name'] == NULL){
			die("Bạn chưa nhập tên danh mục");	
		}else{
			$name = $_POST['menu_name'];	
		}
		if($_POST['menu_oder'] == NULL){
			die("Bạn chưa nhập thứ tự danh mục");	
		}else{
			$oder = $_POST['menu_oder'];	
		}
		$trangthai = $_POST['menu_trangthai'];
		$sql_name = "select * from menu where menu_name = '$name' and menu_id != '$id'";
		$result_name = mysql_query($sql_name);
		if(mysql_num_rows($result_name) > 0){
			die("Menu đã tồn tại");
		}else{
			$sql = "update menu set menu_name = '$name',menu_order = '$oder',menu_trangthai = '$trangthai' where menu_id = '$id'";
			mysql_query($sql);
			header("location:".BASEURL."admin/quantri.php?page=menu&act=list");	
		}		
	}
?>
<h3>Sửa danh mục</h3>
<br/>
<br/>
<form action="<?php echo BASEURL."admin/quantri.php?page=menu&act=edit&mid=".$id;?>" method="post">
	<table width="408" height="195" border="1">
  <tr>
    <td width="157" height="46">Tên danh mục</td>
    <td width="235"><input type="text" name="menu_name" value="<?php echo $data['menu_name']; ?>" /></td>
  </tr>
  <tr>
    <td height="54">Thứ tự</td>
    <td>
      <input type="text" name="menu_oder" value="<?php echo $data['menu_order'];?>" />
    </td>
  </tr>
  <tr>
    <td height="46">Trạng thái</td>
    <td>
      <select name="menu_trangthai">
        <option value="1" <?php if($data['menu_trangthai'] == 1){echo 'selected';} ?>>Kích Hoạt</option>
        <option value="0" <?php if($data['menu_trangthai'] == 0){echo 'selected';} ?>>Tắt</option>
        </select>  
      </td>
  </tr>
  <tr>
     <td height="37">
        <input type="submit" name="ok"  value="Sửa lại" /> 
     </td>
  </tr>
</table>
</form>
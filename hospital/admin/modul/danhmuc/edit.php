<title>Sửa danh mục</title>
<?php
	$id = $_GET['did'];
	$sql = "select * from danhmuc where danhmuc_id = '$id'";
	$result = mysql_query($sql);
	$data = mysql_fetch_assoc($result);
		
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
		$sql_name = "select * from danhmuc where danhmuc_ten = '$name' and danhmuc_id != '$id'";
		$result_name = mysql_query($sql_name);
		if(mysql_num_rows($result_name) > 0){
			die("Danh mục đã tồn tại");
		}else{
			$sql = "update danhmuc set danhmuc_ten = '$name',danhmuc_oder = '$oder',danhmuc_trangthai = '$trangthai' where danhmuc_id = '$id'";
			mysql_query($sql);
			header("location:".BASEURL."admin/quantri.php?page=danhmuc&act=list");	
		}		
	}
?>
<h3>Sửa danh mục</h3>
<br/>
<br/>
<form action="<?php echo BASEURL."admin/quantri.php?page=danhmuc&act=edit&did=".$id;?>" method="post">
	<table width="408" height="195" border="1">
  <tr>
    <td width="157" height="46">Tên danh mục</td>
    <td width="235"><input type="text" name="danhmuc_name" value="<?php echo $data['danhmuc_ten']; ?>" /></td>
  </tr>
  <tr>
    <td height="54">Thứ tự</td>
    <td>
      <input type="text" name="danhmuc_oder" value="<?php echo $data['danhmuc_oder'];?>" />
    </td>
  </tr>
  <tr>
    <td height="46">Trạng thái</td>
    <td>
      <select name="danhmuctrangthai">
        <option value="1" <?php if($data['danhmuc_trangthai'] == 1){echo 'selected';} ?>>Kích Hoạt</option>
        <option value="0" <?php if($data['danhmuc_trangthai'] == 0){echo 'selected';} ?>>Tắt</option>
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
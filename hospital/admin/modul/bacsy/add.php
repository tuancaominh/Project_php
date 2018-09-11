<title>Thêm thành viên</title>
<?php
	if(isset($_POST['ok'])){
		if($_POST['name'] == NULL){
			die("Bạn chưa nhập tên bác sỹ");	
		}else{
			$name = $_POST['name'];	
		}
		$khoa = $_POST['khoa'];
		$trangthai = $_POST['trangthai'];
		$sql_name = "select *from bacsy where bacsy_ten = '$name'";
		$result_name = mysql_query($sql_name);
		if(mysql_num_rows($result_name) > 0){
			die("Tài bác sỹ đã tồn tại");
		}else{
			$sql = "insert into bacsy(bacsy_ten,khoa_id,trangthai) values('$name','$khoa','$trangthai')";
			//echo $sql;
			//die;
			mysql_query($sql);
			header("location:".BASEURL."admin/quantri.php?page=bacsy&act=list");	
		}		
	}
?>
<h3>Thêm mới Bác sỹ</h3>
<br/>
<br/>
<?php
$dsql = "select * from chuyenkhoa";
$dresult = mysql_query($dsql);
?>
<form action="<?php echo BASEURL."admin/quantri.php?page=bacsy&act=add";?>" method="post">
	<table width="408" height="240" border="1">
  <tr>
    <td width="135" height="46">Tên bác sỹ</td>
    <td width="214"><input type="text" name="name" /></td>
  </tr>
  <tr>
    <td height="52">Chuyên khoa</td>
    <td>
     	<select name="khoa">
        	 <?php while($khoa = mysql_fetch_assoc($dresult)){ ?>
          	<option value="<?php echo $khoa['khoa_id']; ?>"><?php echo $khoa['ten_khoa']; ?></option>
         	 <?php } ?>
        </select>  
     </td>
  </tr>
  <tr>
    <td height="47">Trạng thái</td>
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
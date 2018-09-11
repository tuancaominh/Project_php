<title>Thêm thành viên</title>
<?php
	if(isset($_POST['ok'])){
		if($_POST['name'] == NULL){
			die("Bạn chưa nhập tên người bệnh");	
		}else{
			$name = $_POST['name'];	
		}
		if($_POST['bacsyname'] == NULL){
			die("Bạn chưa nhập bác sỹ");	
		}else{
			$bacsy = $_POST['bacsyname'];	
		}
		if($_POST['date'] == NULL){
			die("Bạn chưa nhập lại mật khẩu");	
		}else{
			$date = $_POST['date']; 	
		}
		if($_POST['que'] == NULL){
			die("Bạn chưa nhập giờ khám");
		}else{
			$que = $_POST['que'];	
		}
		if($_POST['tuoi'] == NULL){
			die("Chưa có số điện thoại liên lạc");
		}else{
			$tuoi = $_POST['tuoi'];	
		}
		if($_POST['chuandoan'] == NULL){
			die("Chưa có chuẩn đoán");
		}else{
			$chuandoan = $_POST['chuandoan'];	
		}
		$sql = "insert into benhnhan(ten,tuoi,que,bacsy_kham,ngaykham,chuandoan) values('$name','$tuoi','$que','$bacsy','$date','$chuandoan')";
			//echo $sql;
			//die;
			mysql_query($sql);
			header("location:".BASEURL."admin/quantri.php?page=benhnhan&act=list");	
				
	}
?>
<h3>Thêm mới bệnh án</h3>
<br/>
<br/>
<form action="<?php echo BASEURL."admin/quantri.php?page=benhnhan&act=add";?>" method="post">
	<table width="408" height="287" border="1">
  <tr>
    <td width="135" height="46">Tên người khám</td>
    <td width="214"><input type="text" name="name" /></td>
  </tr>
  <tr>
    <td>Bác sỹ khám</td>
    <td>
      <input type="text" name="bacsyname" />  
      </td>
  </tr>
  <tr>
    <td>Ngày khám</td>
    <td>
      <input type="date" name="date" />
    </td>
  </tr>
  <tr>
    <td>Quê bệnh nhân</td>
    <td>
      <input type="text" name="que" />  
    </td>
  </tr>
  <tr>
    <td>Tuổi bệnh nhân</td>
    <td>
      <input type="text" name="tuoi" />
    </td>
  </tr>
  <tr>
    <td>Chuẩn đoán</td>
    <td>
      <textarea cols="35" rows="4" name="chuandoan"></textarea>
    </td>
  </tr>

  <tr>
    <td>
      	<input type="submit" name="ok"  value="Thêm mới" /> 
    </td>
    <td>
    	<input type="reset" name="reset" value="Nhập lại" />
    </td>
  </tr>
</table>

</form>
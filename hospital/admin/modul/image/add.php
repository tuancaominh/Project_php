<title>Thêm hình ảnh</title>
<h3>Thêm hình ảnh</h3>
<?php
	if(isset($_POST['ok'])){
		if($_POST['title'] == NULL){
			die("Bạn chưa nhập tiêu đề của ảnh");	
		}else{
			$title = $_POST['title'];	
		}
		$danhmucid = $_POST['danhmuc'];
		$trangthai = $_POST['trangthai']; 	
		
		if($_FILES['img']['name'] != NULL){ // Có hình ảnh
		if($_FILES['img']['type'] == "image/jpeg"
        || $_FILES['img']['type'] == "image/png"
        || $_FILES['img']['type'] == "image/gif"){
        // là file ảnh
        // Tiến hành code upload    
            if($_FILES['img']['size'] > 1048576){
                echo "File không được lớn hơn 1mb"; die();
            }else{
                // file hợp lệ, tiến hành upload
                $path = "../upload/"; // file sẽ lưu vào thư mục upload
                $tmp_name = $_FILES['img']['tmp_name'];
                $nameimg = $_FILES['img']['name'];
                $type = $_FILES['img']['type']; 
                $size = $_FILES['img']['size']; 
                move_uploaded_file($tmp_name,$path.$nameimg);
				}	
			}
		}
		$sql = "insert into image(image_tenanh,image_title,danhmuc_id,image_trangthai) values('$nameimg','$title',$danhmucid,'$trangthai')";
		//echo $sql;
		//die;
		mysql_query($sql);
		header("location:".BASEURL."admin/quantri.php?page=image&act=list");
	}
?>
<?php
	$dsql = "select * from danhmuc";
	$dresult = mysql_query($dsql);
?>
<form action="<?php echo BASEURL."admin/quantri.php?page=image&act=add"; ?>" method="post" enctype="multipart/form-data">
  <table width="353" height="256" border="1">
  <tr>
    <td width="127">Tên ảnh</td>
    <td width="210">
    	<input type="file" name="img" />
    </td>
  </tr>
  <tr>
    <td>Tiêu đề</td>
    <td>
    	<input type="text" name="title" />
    </td>
  </tr>
  <tr>
    <td>Thuộc mục </td>
    <td>
      	<select name="danhmuc" >
             <?php while($danhmuc = mysql_fetch_assoc($dresult)){?>
             	<option value="<?php echo $danhmuc['danhmuc_id']; ?>"><?php echo $danhmuc['danhmuc_ten']; ?></option>
             <?php }?>
    	</select>
    </td>
  </tr>
  <tr>
    <td height="44">Trạng thái</td>
    <td>
     	<select name="trangthai">
			<option value="1">Kích Hoạt</option>	   
            <option value="0">Tắt</option>	     
  	    </select>
    </td>
  </tr>
  <tr>
    <td height="39"><input type="submit" name="ok" value="Thêm ảnh"></td>
    <td>&nbsp;</td>
  </tr>
</table>

</form>
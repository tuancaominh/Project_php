<h3>Sửa hình ảnh</h3>
<br/>
<?php
	$id = $_GET['iid'];
	$sql = "select * from image where image_id = '$id'";
	$result = mysql_query($sql);
	$data = mysql_fetch_assoc($result);
	
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
                $name = $_FILES['img']['name'];
                $type = $_FILES['img']['type']; 
                $size = $_FILES['img']['size']; 
                move_uploaded_file($tmp_name,$path.$name);
				$sql = "update image set image_tenanh = '$name', image_title = '$title',danhmuc_id = '$danhmucid',image_trangthai = '$trangthai' where image_id = '$id'";
				}	
			}else{
				echo "kiểu file không hợp lệ"; die();
				}			
		}else{
			$sql = "update image set image_title = '$title',danhmuc_id = '$danhmucid',image_trangthai = '$trangthai' where image_id = '$id'";
	}
	mysql_query($sql);
	header("location:".BASEURL."admin/quantri.php?page=image&act=list");
}
?>
<?php
	$dsql = "select * from image inner join danhmuc on danhmuc.danhmuc_id = image.danhmuc_id group by image.danhmuc_id";
	$dresult = mysql_query($dsql);
?>
<form action="<?php echo BASEURL."admin/quantri.php?page=image&act=edit&iid=".$id; ?>" method="post" enctype="multipart/form-data">
  <table width="353" height="256" border="1">
  <tr>
    <td width="127">Tên ảnh</td>
    <td width="210">
    	<input type="file" name="img" " />
    </td>
  </tr>
  <tr>
    <td>Tiêu đề</td>
    <td>
    	<input type="text" name="title" value="<?php echo $data['image_title'];?>" />
    </td>
  </tr>
  <tr>
    <td>Thuộc mục </td>
    <td>
      	<select name="danhmuc" >
             <?php while($danhmuc = mysql_fetch_assoc($dresult)){?>
             	<option value="<?php echo $danhmuc['danhmuc_id']; ?>" <?php if($data['danhmuc_id'] == $danhmuc['danhmuc_id']){echo 'selected';}?>><?php echo $danhmuc['danhmuc_ten']; ?></option>
             <?php }?>
    	</select>
    </td>
  </tr>
  <tr>
    <td height="44">Trạng thái</td>
    <td>
     	<select name="trangthai">
			<option value="1" <?php if($data['image_trangthai'] == 1){ echo 'selected';} ?>>Kích Hoạt</option>	   
            <option value="0" <?php if($data['image_trangthai'] == 0){ echo 'selected';} ?>>Tắt</option>	     
  	    </select>
    </td>
  </tr>
  <tr>
    <td height="39"><input type="submit" name="ok" value="Sửa ảnh"></td>
    <td>&nbsp;</td>
  </tr>
</table>


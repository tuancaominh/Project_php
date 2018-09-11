<title>Thêm tin tức</title>
<?php
	if(isset($_POST['ok'])){
		if($_POST['title'] == NULL){
			die ("Bạn chưa nhập tiêu đề");	
		}else{
			$title = $_POST['title'];	
		}
		if($_POST['author'] == NULL){
			die ("Bạn chưa nhập tác giả");		
		}else{
			$author = $_POST["author"];	
		}
		if($_POST['info'] == NULL){
			die("Chưa có mô tả bài viết");	
		}else{
			$info = $_POST['info'];	
		}	
		if($_POST['full'] == NULL){
			die("Chưa có nội dung bài viết");	
		}else{
			$full = $_POST['full'];	
		}	
		$menuid = $_POST['menuid'];
		$trangthai = $_POST['trangthai'];
		$datetime = date("d/m/Y - H:i:s");
		$oder = $_POST['oder'];
		
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
				$sql = "insert into news(news_tieude,news_tacgia,news_mota,news_noidung,ngaynhap,news_anh,news_trangthai,menu_id,danhmuc_id) values('$title','$author','$info','$full','$datetime','$name','$trangthai','$menuid','$oder')";
           }
        }else{
           // không phải file ảnh
           echo "Kiểu file không hợp lệ"; die();
        }
	}else{ // Không có ảnh
		$sql = "insert into news(news_tieude,news_tacgia,news_mota,news_noidung,ngaynhap,news_trangthai,menu_id) values('$title','$author','$info','$full','$datetime','$trangthai','$menuid')";
		//echo $sql;
		//die;
	}
	mysql_query($sql);
	header("location:".BASEURL."admin/quantri.php?page=new&act=list");
	}
?>
<?php
$dsql = "select * from menu";
$dresult = mysql_query($dsql);
?>
<form action="<?php echo BASEURL."admin/quantri.php?page=new&act=add"; ?>" method="post" enctype="multipart/form-data">
  <table width="799" border="1">
    <tr>
      <td width="154" height="37">Tiêu đề tên<span class="red"></span></td>
      <td width="666">
        <input name="title" type="text" size="25" />
      </td>
    </tr>
    <tr>
      <td height="36">Thuộc chuyên mục<span class="red"></span></td>
      <td>
        <select name="menuid">
          <?php while($menu = mysql_fetch_assoc($dresult)){ ?>
          <option value="<?php echo $menu['menu_id']; ?>"><?php echo $menu['menu_name']; ?></option>
          <?php } ?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td height="50">Tác giả<span class="red"></span></td>
      <td><input name="author" type="text" size="25" /></td>
    </tr>
    <tr>
      <td height="103">Mô tả ngắn</td>
      <td><textarea cols="35" rows="4" name="info"></textarea></td>
    </tr>
    <tr>
      	<td height="164">Nội dung<span class="red"></span></td>
      	<td>
      	<?php 
		$fck = new FCKeditor('full');
		$fck->BasePath = sBASEPATH;
		//$fck->Value  = "aaaaa";
		$fck->Width  = '100%';
		$fck->Height = 400;
		$fck->Create();
	    ?>
    	</td>
    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="img" size="25" /></td>
    </tr>
    <tr>
      <td>Trạng thái</td>
      <td>
        <select name="trangthai">
        	<option value="1">Kích hoạt</option>
            <option value="0">Tắt</option>
      	</select>
      </td>
    </tr>
    <tr>
      <td>Thứ tự</td>
      <td>
        <input type="text" name="oder" size="25">
      </td>
    </tr>
    <tr>
      <td height="77"></td>
      <td><input type="submit" name="ok" onclick="return checkform()" id="button" value="Thêm tin tức" />
      <input type="reset" name="reset" id="reset" value="Reset" /></td>
    </tr>
  </table>
</form>
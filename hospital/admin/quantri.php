<?php session_start(); ?>
<?php
	header('Content-Type: text/html; charset=utf-8');
	//1. Nhung tap tin FCKeditor vao file chay
	include('fckeditor/fckeditor.php');
	//2. Dinh nghia duong dan BasePath cho FCK
	$sRoot = "http://".$_SERVER['HTTP_HOST'];
	$sDomain = str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
	$folderFCK = 'fckeditor/';
	define('sBASEPATH', $sRoot.$sDomain.$folderFCK);
    if(!isset($_SESSION['id']) && $_SESSION['level'] != 1){
            header("location:login.php"); exit();
        }
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Quản Trị nội dung</title>
<script type="text/javascript">
	function askconfirm(){
		if(confirm("Bạn có muốn thoat không ?")){
			return true;
		}else{
			return false;	
		}	
	}
</script>
</head>
<body>
<?php
	require("../libraries/config.php");
?>
<div id="wapper">
	<div id="main">
    	<div id="header">
        	<div id="menu">
                <ul>
                    <li><p> Xin Chào  <?php echo $_SESSION['fullname'] ?></p></li>
                    <li><a href="quantri.php">Trang chủ</a></li>
                    <li><a href="logout.php" onclick="return askconfirm()">Thoát</a></li>
                </ul>
             </div>   
        </div>
        <div id="conten">
        	<div id="left_conten">
            	<div class="left_conten">
                 <div class="list_conten">
                    	<div class="title"><a href="<?php echo BASEURL."admin/quantri.php"; ?>">HOME</a></div>
                        <br/>
                    </div>
                    <div class="list_conten">
                    	<div class="title">Quản Lý</div>
                    	<ul>
                        	<li><a href="<?php echo BASEURL."admin/quantri.php?page=user&act=list"; ?>">Thành Viên</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=danhmuc&act=list"; ?>">Danh mục</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=new&act=list"; ?>">Tin Tức</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=image&act=list"; ?>">Hình ảnh</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=menu&act=list";?>">Menu</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=bacsy&act=list";?>">Bác sỹ</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=khoa&act=list";?>">Chuyên khoa</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=benhnhan&act=list";?>">Bệnh án</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=lichkham&act=list";?>">Lịch Khám</a></li>
                        </ul>
                    </div>
                    <div class="list_conten">
                    	<div class="title">Thêm Mới</div>
                    	<ul>
                        	<li><a href="<?php echo BASEURL."admin/quantri.php?page=user&act=add"; ?>">Thành Viên</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=danhmuc&act=add"; ?>">Danh mục</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=new&act=add"; ?>">Tin Tức</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=image&act=add";?>">Hình ảnh</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=menu&act=add"; ?>">Menu</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=bacsy&act=add"; ?>">Bác sỹ</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=khoa&act=add"; ?>">Chuyên khoa</a></li>
                            <li><a href="<?php echo BASEURL."admin/quantri.php?page=benhnhan&act=add"; ?>">Bệnh án</a></li>
                        </ul>
                    </div>
                </div>
                <div class="cls"></div>
            </div>
            <div id="right_conten">
				<?php 
                    if(isset($_GET['page'])){
                        switch($_GET['page']){
                            case "user" : require("modul/user/controller.php"); break; 	
							case "danhmuc" : require("modul/danhmuc/controller.php"); break;
							case "new" : require("modul/new/controller.php"); break;	
							case "menu" : require("modul/menu/controller.php"); break;
							case "image" : require("modul/image/controller.php"); break;
							case "bacsy" : require("modul/bacsy/controller.php"); break;
							case "khoa" : require("modul/khoa/controller.php"); break;
							case "benhnhan" : require("modul/benhnhan/controller.php"); break;
							case "lichkham" : require("modul/lichkham/controller.php"); break;
                        }
                    }else{
                        require("home.php");	
                    }
            	?>
            </div>
            <div class="cls"></div>
        </div>
        <div id="footer">
        	<p>ĐH Đông Đô - Đồ án tốt nghiệp - Design by Cao Minh Tùng</p>
        </div>
    </div>
</div>
</body>
</html>
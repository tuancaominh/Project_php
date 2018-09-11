<?php 
	$id = $_GET['menuid'];
	$msql = "select * from menu where menu_id = '$id'";
	$menu = mysql_fetch_assoc(mysql_query($msql));
	//echo $id;
	//die;
?>
<h3><?php echo $menu['menu_name'];?></h4>
<br />
<style type="text/css">
	.list_menu{border-bottom:1px solid #CCC;}
	.list_menu img{float:left;border:1px solid #DDD;padding:1px;margin:0px 10px 5px 0px}
	.list_menu h3 a{color:#060}
	.list_menu h3 a:hover{color:#F30}
	.list_menu{ width:656px}
	.list_list{ width:695px; height:120px ; float:left; margin-bottom:5px; padding:5px 0px}
</style>
<div class="list_menu">
<?php
	$nsql = "select * from news where menu_id = '$id' and news_trangthai = '1' ";		
	$nresult = mysql_query($nsql);
	$numrows = mysql_num_rows($nresult);
	if($numrows > 0){ //đã có tin tức
 		while($new = mysql_fetch_assoc($nresult)){
		    echo "<div class='list_list'>";
			echo "<img src='upload/".$new['news_anh']."' width='100'/>";
			echo "<h3><a href='".BASEURL."index.php?page=menu&act=view&nid=".$new['news_id']."'>".$new['news_tieude']."</a></h3>";
			echo "<p>Date : ".$new['ngaynhap']." - ".$new['news_tacgia']."</p>";	
			echo "<p>".$new['news_mota']."</p>";
			echo "<br />";
			echo "</div>";
			//echo "<div class=cls'></div>";		
		}	
	}else{
		echo "Tin tức đang cập nhật....";	
	}
?>
</div>
<div class="cls"></div>


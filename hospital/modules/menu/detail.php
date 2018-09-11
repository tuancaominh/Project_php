<?php
	$id = $_GET['nid'];
	$sql = "select * from news where news_id = '$id'";
	$data = mysql_fetch_assoc(mysql_query($sql));
?>
<h3><?php echo $data['news_tieude']; ?></h3>
<style type="text/css">
.viewnews{border-bottom:1px solid #CCC;}
.viewnews img{float:left;border:1px solid #DDD;padding:1px;margin:0px 7px 0px 0px}
.viewnews h3 a{color:#060}
.viewnews h3 a:hover{color:#F30}
</style>
<div class="viewnews">
	<?php 
		echo "<p><i>Date :".$data['ngaynhap']." - ".$data['news_tacgia']."</i></p>";
		echo "".$data['news_noidung']."";
	?>
</div>
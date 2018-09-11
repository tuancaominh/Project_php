<div id="adv">
	<div class="title_right">quảng cáo</div>
        <div class="adv_img">
<?php
	$isql = "select * from image where danhmuc_id = '12' and image_trangthai = '1'";
	$iresult = mysql_query($isql);
	$numrows = mysql_num_rows($iresult);
	
	while($img = mysql_fetch_assoc($iresult)){
		echo "<img src='upload/".$img['image_tenanh']."' width='300' height='300'/>";
		echo "<br/>";
		echo "<hr>";	
	}
?>
		 </div>
 	</div>       
 </div>
<div class="cls"></div>
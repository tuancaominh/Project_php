<?php
	$isql = "select * from image where danhmuc_id = '13' and image_trangthai = '1'";
	$iresult = mysql_query($isql);
	$numrows = mysql_num_rows($iresult);
	
	while($img = mysql_fetch_assoc($iresult)){
		echo "<img class='images_nivo_slider' src='upload/".$img['image_tenanh']."' width='300' height='300' alt=".$img['image_title']." target='_blank' />";
	}
?>



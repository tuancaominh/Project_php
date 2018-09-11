<?php
	$isql = "select * from image where danhmuc_id = '14' and image_trangthai = '1'";
	$iresult = mysql_query($isql);
	$numrows = mysql_num_rows($iresult);
	
	while($img = mysql_fetch_assoc($iresult)){
		echo "<img src='upload/".$img['image_tenanh']."' width='150' height='100' alt=".$img['image_title']." target='_blank' />";
	}
?>

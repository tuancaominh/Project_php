<div class="title_right">Hình ảnh</div>
    <div id="image_show">
        <marquee direction="up" scrollamount="1" scrolldelay="50">
<?php
	$isql = "select * from image where danhmuc_id = '11' and image_trangthai = '1'";
	//echo $nsql;
	$iresult = mysql_query($isql);
	$numrows = mysql_num_rows($iresult);
	
	while($img = mysql_fetch_assoc($iresult)){
	//echo "<pre>";
	//print_r($img);
	//echo "</pre>";
	echo "<img src='upload/".$img['image_tenanh']."' width='300' height='300'/>";
	echo "<br/>";
	echo "<hr>";	
	}
?>
		</marquee>
	</div>
</div>

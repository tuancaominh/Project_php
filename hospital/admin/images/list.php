<style type="text/css">
	
</style>
<div class="list_image">
<?php
	$nsql = "select * from image where image_id = '11'";
	$nresult = mysql_query($nsql);
	$numrows = mysql_num_rows($nresult);
	if($numrows > 0){ //đã có tin tức
 		while($new = mysql_fetch_assoc($nresult)){
			echo "<img src='upload/".$new['image_tenanh']."' width='300' height='300'/>";
			echo "<br/>";
		}	
	}
?>
</div>


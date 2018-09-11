<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("modules/image/list.php"); break;
		}	
	}
?>
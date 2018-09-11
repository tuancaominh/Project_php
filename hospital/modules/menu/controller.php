<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("modules/menu/list.php"); break;
			case "view" : require("modules/menu/detail.php"); break;
			default : require("modules/menu/list.php"); break;	
		}	
	}
?>
<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("modul/bacsy/list.php"); break;
			case "add" : require("modul/bacsy/add.php"); break;
			case "edit" : require("modul/bacsy/edit.php"); break;
			case "del" : require("modul/bacsy/del.php"); break;
			default: require("modul/bacsy/list.php"); break;
		}	
	}
?>
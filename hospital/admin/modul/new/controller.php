<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list": require("modul/new/list.php"); break;	
			case "add": require("modul/new/add.php"); break;	
			case "edit": require("modul/new/edit.php"); break;	
			case "del": require("modul/new/del.php"); break;	
			default: require("modul/new/list.php"); break;	
		}	
	}
?>
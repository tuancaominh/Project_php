<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list": require("modul/menu/list.php"); break;	
			case "add": require("modul/menu/add.php"); break;	
			case "edit": require("modul/menu/edit.php"); break;	
			case "del": require("modul/menu/del.php"); break;	
			default: require("modul/menu/list.php"); break;	
		}	
	}

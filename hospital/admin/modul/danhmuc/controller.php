<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list": require("modul/danhmuc/list.php"); break;	
			case "add": require("modul/danhmuc/add.php"); break;	
			case "edit": require("modul/danhmuc/edit.php"); break;	
			case "del": require("modul/danhmuc/del.php"); break;	
			default: require("modul/danhmuc/list.php"); break;	
		}	
	}

<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("modul/khoa/list.php"); break;
			case "add" : require("modul/khoa/add.php"); break;
			case "edit" : require("modul/khoa/edit.php"); break;
			case "del" : require("modul/khoa/del.php"); break;
			default: require("modul/khoa/list.php"); break;
		}	
	}
?>
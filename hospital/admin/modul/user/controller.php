<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("modul/user/list.php"); break;
			case "add" : require("modul/user/add.php"); break;
			case "edit" : require("modul/user/edit.php"); break;
			case "del" : require("modul/user/del.php"); break;
			default: require("modul/user/list.php"); break;
		}	
	}
?>
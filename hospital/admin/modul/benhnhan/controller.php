<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("modul/benhnhan/list.php"); break;
			case "add" : require("modul/benhnhan/add.php"); break;
			case "edit" : require("modul/benhnhan/edit.php"); break;
			case "del" : require("modul/benhnhan/del.php"); break;
			default: require("modul/benhnhan/list.php"); break;
		}	
	}
?>
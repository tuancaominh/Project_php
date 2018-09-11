<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("modul/lichkham/list.php"); break;
			case "add" : require("modul/lichkham/add.php"); break;
			case "edit" : require("modul/lichkham/edit.php"); break;
			case "del" : require("modul/lichkham/del.php"); break;
			default: require("modul/lichkham/list.php"); break;
		}	
	}
?>
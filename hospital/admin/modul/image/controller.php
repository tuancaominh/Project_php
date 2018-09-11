<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list"; require("modul/image/list.php"); break;
			case "add"; require("modul/image/add.php"); break;
			case "edit"; require("modul/image/edit.php"); break;
			case "del"; require("modul/image/del.php"); break;
			default; require("modul/image/list.php"); break;	
		}	
	}
?>
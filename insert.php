<?php 
	include_once('db_crud.php');
	
	$name = $_POST['name'];
	$add = $_POST['add'];
	$db = new db();
	
	$db->insert($name,$add);
?>

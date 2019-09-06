<?php 
	include_once('db_crud.php');
	
	$id = $_GET['id'];
	$db = new db();
	$db->delete($id);
?>

<?php 
include_once('db_crud.php');

	$id = $_POST['id'];
	$name = $_POST['name'];
	$add = $_POST['add'];

	$db = new db();
	
	$db->update($id,$name,$add);

?>

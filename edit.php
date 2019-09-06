<?php
	include_once('db_crud.php');
	$id = $_GET['id'];
	$db = new db;
	$dbedit = $db->edit($id);
		
?>
<form method="post" action="editprocess.php">
		<table border='1px'>
			<tr>
				<td>Name :</td>
				<td><input type='text' name='name' value='<?php echo $dbedit['name']; ?>'></td>
			</tr>
			<tr>
				<td>Address :</td>
				<td><input type='text' name='add' value='<?php echo $dbedit['address']; ?>'></td>
			</tr>
			<tr>
				<input type="hidden" name='id' value='<?php  echo $dbedit['id']; ?>'>
				<td><input type='submit' name='submit' value="Click"></td>
			</tr>
		</table>
	</form>

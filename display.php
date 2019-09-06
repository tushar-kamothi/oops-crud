
<div style="color:red; font-size:15px;">
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
			</ul>
		</nav>
	</div>
	<?php
	include_once('db_crud.php');
	$db = new db();
	$db->display();
?>
	

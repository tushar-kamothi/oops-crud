<?php 


define('host','localhost');
define('username','root');
define('password','');
define('database','oop_mysqli');
class db{
	
	function __construct(){
		$this->conn = new mysqli(host,username,password,database);
		if(!$this->conn){
			echo "error in connection";
		}
	}
	
	public function insert($name,$add){
		$sql = "insert into crud (name,address) values ('$name','$add')";
		$insert = $this->conn->query($sql);
		if($insert){
				echo "data inserted";
				echo '<a href="display.php">Record</a>';
		}
	
	}
	
	public function display(){
		$sql = "select * from crud";
		$display = $this->conn->query($sql);
		if($display){
			$counter = 0;
			echo "<table border = '2px'>
				<tr>
					<th>SrNo.</th>
					<th>Name</th>
					<th>Address</th>
					<th colspan=2>Action</th>
				</tr>";
				while($row = mysqli_fetch_assoc($display)){
						$counter++;
						echo "<tr>
						<td>";
						echo $counter;
						echo '</td>
						<td>';
						echo $row['name'];
						echo '</td>
						<td>';
						echo $row['address'];
						echo '</td>
						<td>';
						echo "<a href='edit.php?id=".$row['id']."'>Edit</a>";
						echo '</td> <td>';
						echo "<a href='delete.php?id=".$row['id']."'>Delete</a>";
						echo '</td>
						</tr>';
						
				}
			echo '</table>';
		}
	}
	
	public function edit($id){
		$sql = "select * from crud where id = '{$id}'";
		$record = $this->conn->query($sql);
		if($record -> num_rows >0){
			$data = $record->fetch_assoc();
			return $data;
		}
		else{
			return false;
		}
	}
	
	public function update($id,$name,$add){
		$sql = "update crud set name = '$name' , address='$add' where id = '$id'";
		$update = $this->conn->query($sql);
		if($update){
				echo "data updated";
				echo '<a href="display.php">Records</a>';
		}
		
	}
	
	public function delete($id){
			$sql = "delete from crud where id ='$id'";
			$del = $this->conn->query($sql);
			if($del){
					echo 'deleted';
			}
			
	}
}




?>

<?php
	include('../backend/include/connect.php');
	$sql="select * from users where id=1";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		while($rows=$result->fetch_assoc()){
			$name=$rows['name'];
			$contact=$rows['contact'];
			$address=$rows['address'];
			
			
		}
	}

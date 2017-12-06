<?php
	function minimum($data,$name,$min){
		if((strlen($data))<$min){
			return "$name cannot be less than $min";
			}
			else{
				return 0;
			}
}


function isUnique($data,$fieldNAme,$tablename){
		global $conn;
 		$sql="SELECT * FROM student where $fieldNAme='$data'";

		$result=$conn->query($sql);

		if($result->num_rows>0){
        	return 1;
        }
           else{
           	return 0;
           }
                      
        }

function login($user,$password){
	global $conn;
 		$sql="SELECT * FROM student where uesrname='$user' and password='password'";

		$result=$conn->query($sql);

		if($result->num_rows>0){
			$_SESSION['name']=$user;
        	return 1;
        }
           else{
           	return 0;
           }
                      
        }



        function logout(){
        	session_destroy();
        	unset($_SESSION['name']);
        	("location:../login.php");
        }



?>


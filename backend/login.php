<?php
include('include/connect.php');


session_start();
if(isset($_POST['login']))
{
$user=$_POST['username'];
$pass=$_POST['password'];

$sql="select * from admin where username='$user' and password='$pass'";
$sql2="select * from users where username='$user' and password='$pass'";


$result=$conn->query($sql);
$result2=$conn->query($sql2);


if($result->num_rows>0 || $result2->num_rows>0){
	$_SESSION['admin']=$user;
	header("location:index.php");

}else{
    $message= "login password or username incorrect.";
	header("location:login_form.php?message=$message");
}
/*if(isset($_SESSION['admin'])){
	header("location:../index.php?action=profile");
}*/
}

?>





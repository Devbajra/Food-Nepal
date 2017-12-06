<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <?php include('include/editscript.php'); 
	if(isset($_POST["submit"])){
	
	$namd=$_POST['name'];	
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	
	$sql="update users set address='$address',contact='$contact'";


	$result=mysqli_query($conn,$sql);
	if(!$result){
	echo "updated unseccessful :". mysqli_error($conn);
	die();
	}else
	{
		echo "updated successfull<br>";
	}

	}
  $sql="select * from users limit 1";
  $result=$conn->query($sql);
  if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
      $name=$rows['name'];
	  $address=$rows['address'];
      $contact=$rows['contact'];
 
    }
  }

 ?>
</head>

<body>
<form method="post" action="index.php?action=editor">
  <table>
   <tr>
      <td width="93">Name   : </td>
      <td width="162"><input type="textarea" name="name" placeholder="Bagels" value="<?php echo  $name;?>"></td>
    </tr>
    <tr>
      <td width="93">Address   : </td>
      <td width="162"><input type="textarea" name="address" placeholder="kathmandu,newroad" value="<?php echo  $address;?>"></td>
    </tr>
    <tr>
      <td>Contact: </td>
      <td><input type="tel" name="contact" placeholder="+00-000000000000" value="<?php echo  $contact;?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" width="100%" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("location:login_form.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>backend</title>
<link href="css/custom.css" type="text/css" rel="stylesheet" />
</title>
</head>
<body>
<?php include('include/header.php');
      include('include/connect.php');
      include_once('include/function.php');
?>

<section>

 <?php include('include/nav.php');?>
  <div class="right-side">
  <?php
 // print_r($_GET);
    if($_GET==NULL){
      echo "<h2> Welcome to dashboard</h2>";
    }else{
      include("pages/".$_GET['action'].".php");
    }
  ?>
  
  <?php include('pages/editor.php')?>
  </div>
</section>
<footer>
</footer>
</body>
</html>
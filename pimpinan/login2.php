<?php  
session_start();
include("config.php"); 
if(isset($_POST['submit'])){
  
  $emailid = $_POST["uname"];
  $password = $_POST["password"];

  $sql = "SELECT count(*) as total FROM `login` WHERE email = '".$emailid."' AND password = '".$password."' ";
  $result = $koneksi->query($sql);

  if($result->num_rows > 0){
    $_SESSION['email'] = $emailid;
    header("location:index.php");
    die;
  }
  header("location:login.php");
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<!-- <link rel="stylesheet" type="text/css" href="datatable/datatables.css">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css"> -->
	
</head>

<div class=container>
<div class="loginkotak">
<form method="post" action="proseslogin.php">
<table class="tabel">
<tr style="padding: 0;margin: 0;">
<td style="padding: 0;margin: 0;"> Username </td>
<td style="padding: 0;margin: 0;"> : </td>
<td style="padding: 0;margin: 0;"> <input class="logo" type="text" name="uname" placeholder="Username" > </td>
</tr>
<tr style="padding: 0;margin: 0;">
<td style="padding: 0;margin: 0;"> Password </td>
<td style="padding: 0;margin: 0;"> : </td>
<td style="padding: 0;margin: 0;">  <input class="key" type="password" name="password"  placeholder="Password"> </td>
</tr>
	
	
</table>
<input type="submit" name="submit" value="Login">
</form>
</div>
</div>
</html>
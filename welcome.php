<?php
session_start();
if($_SESSION['login'])
{
?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>Welcome</title>
</head>
<body bgcolor="#d6c2c2">  
 
<p>Welcome : <?php echo $_SESSION['login'];?> | <a href="logout.php">Logout</a> </p>
<p><a href="userlog.php">Click on link of User tracking record log</a></p>

 </body>
</html>
<?php
} else{
header('location:logout.php');
}
?>

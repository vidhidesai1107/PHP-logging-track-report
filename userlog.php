<?php
session_start();
include('config.php');
if($_SESSION['login'])
{
?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>Welcome</title>
</head>
<body bgcolor="#d6c2c2">    
<p><a href="welcome.php">Welcome : <?php echo $_SESSION['login'];?> </a>| <a href="logout.php">Logout</a> </p>
<table>
<tr>
<th>Sno.</th>
<th>Employee Id</th>
<th>User Name</th>
<th>User Ip</th>
<th>Login Time</th>
</tr>

<?php $query=mysqli_query($con,"select * from userlog where  userId='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>

<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['userId'];?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['userIp'];?></td>
<td><?php echo $row['loginTime'];?></td>
</tr>

<?php $cnt=$cnt+1;
} ?>
</table>
 </body>
</html>
<?php
} else{
header('location:logout.php');
}
?>

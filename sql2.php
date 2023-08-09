<?php
$db_name="cassy_fashion";
$mysql_username="root";
$mysql_password="";
$server_name="localhost";
$conn=mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);
if(isset($_POST['sub1']))
{
	$username=$_POST['u'];
	$password=$_POST['p'];
$q="select * from register where username='$username' and password='$password'";
$result=$conn->query($q);
while ($row=$result->fetch_assoc()) 
{
 $u=$row["username"];
 $p=$row["password"];
}
if($username===$u && $password===$p)
{
	echo '<script> alert("valid");
	window.location.href="first.php"</script>';
}
else
{
	echo '<script> alert("invalid");
	window.location.href="accountt.html"</script>';
}
}
$conn->close();
?>	
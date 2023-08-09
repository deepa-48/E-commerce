<?php
$db_name="cassy_fashion";
$mysql_username="root";
$mysql_password="";
$server_name="localhost";
$conn=mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);
if(isset($_POST['sub']))
{
	$username=$_POST['u'];
    $email=$_POST['e'];
	$password=$_POST['p'];
$q="insert into register(username,email,password) values('$username','$email','$password')";
if ($conn->query($q)===TRUE)
 {
	echo '<script> alert("insert success")</script>';
	header("Location:http://localhost/proem/accountt.html");
 }
 else 
 {
 	echo '<script> alert("with this name already have an account")
 	window.location.href="accountt.htmlz"</script>';
 }	
}
$conn->close();
?>	
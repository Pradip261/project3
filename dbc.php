<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,'pradip');
if(!$conn){
	die('could not connect my sql:'.mysqli_error());
}
?>


<?php
session_start();
error_reporting(0);
include('dbc.php'); 
$name=$_POST["Name"];
$email=$_POST["Email"];
$password=$_POST["Password"];
//$pass=$password;
$p_num=$_POST["Phone_number"];
$adr=$_POST["Address"];
$gen=$_POST["gender"];

$skill=$_POST["skill"];
$str=implode(',', $skill);
$city=$_POST["city"];

$nm=$_FILES['file']['Name'];
$fol=time()."-".rand(0,99)."-".$nm;
$path="upload/".$fol;
$temp=$_FILES['file']['tmp_name'];
move_uploaded_file($temp, $path);
$role="user";

$qr=mysqli_query($conn,"SELECT * from reg where Email='$email'");
$qrr=mysqli_query($conn,"SELECT * from reg where Phone_number='$p_num'");

if(mysqli_fetch_array($qr)){
	echo "Email Already Exist.";
}
elseif(mysqli_fetch_array($qrr)){
	echo "Phone Number Already Exist.";
}
else{
	$query="INSERT INTO reg(id, Name, Email, Phone_number, Password, Adress,Gender,Skill,City,file,role) VALUES('','$name','$email','$p_num','$password','$adr','$gen','$str','$city','$path','$role')";

	$sql=mysqli_query($conn, $query) or die("Could Not Perform the query");
	header("location:login.php?status=success");
}
?>
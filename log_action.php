<?php
session_start();
include('dbc.php');
$username=$_POST["Email"];
echo "$username";
$password=$_POST["Password"];
echo "$password";
$qr=mysqli_query($conn,"SELECT * from reg where Email='$username' and Password='$password'");
$row=mysqli_fetch_array($qr);
echo "$row[id]";

$count=mysqli_num_rows($qr);
echo "$count";

if($count=1)
{
	echo"<script>window.location.href='profile.php'</script>";
	$_SESSION['id']=$row['id'];
}
else{
	echo "password doesn't match.";
}

?>

<?php
session_start();
include('dbc.php');
$id=$_REQUEST['id'];
$qr=mysqli_query($conn,"DELETE from reg where id='$id'");
echo "$id";
if($qr)
{
  echo "<script>window.location.href='update.php'</script>";
}
?>
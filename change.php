<?php
session_start();
include('dbc.php');
if(isset($_SESSION['id']))
{
   $id=$_SESSION['id'];
   $name=$_POST['name_edit'];
   //echo $name;

   // $email=$_POST["Email"];
   // $password=$_POST["Password"];
   // //$pass=$password;
   $p_num=$_POST["Phone_Number_edit"];
   //echo $p_num;
   $adr=$_POST["Adress_edit"];
   //echo $adr;
   // $gen=$_POST["gender"];

   // $skill=$_POST["skill"];
   // $str=implode(',', $skill);
   // $city=$_POST["city"];

   $nm=$_FILES['file_edit']['name_edit'];
   $fol=time()."-".rand(0,99)."-".$nm;
   $path="upload/".$fol;
   $temp=$_FILES['file_edit']['tmp_name'];
   move_uploaded_file($temp,$path);
   $qr=mysqli_query($conn,"UPDATE reg set Name='$name', Phone_number='$p_num', Adress='$adr', file='$temp' where id='$id'");
}
if($qr)
   {
    echo "<script>alert('update successfull')</script>";
	 echo "<script>window.location.href='update.php'</script>";
  }
else
{
echo "<script>alert('unsuccessfull')</script>";
}  

<?php
session_start();
include('dbc.php');
if(isset($_SESSION['id']))
  {
   $id=$_SESSION['id'];
   
   $qr=mysqli_query($conn,"SELECT *from reg where id='$id'");
   $row=mysqli_fetch_array($qr);
  
   echo "<center><u><b>Profile Page</b></u><br><br><br>";
   echo "Name:-" .$row['Name']."<br>";
   echo "Address:-" .$row['Adress']."<br>";
   echo "City:-" .$row['City']."<br>";
   echo "Gender:-" .$row['Gender']."<br>";
   echo "Skill:-" .$row['Skill']."<br>";
   echo "File:-<br>"."<img src=".$row['file'].">"."<br>";

  $qrr=mysqli_query($conn,"SELECT * from reg where id='$id'");
  $admin=mysqli_fetch_array($qrr);
  $role=$admin['role'];
  if($role=='Admin'){
    echo "<a href='update.php'>Update</a>";
    //echo "<a href='edit.php'?id=".$row['id'].">Edit</a>";
    ?>
    <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a><?php
  }
  elseif($role=='Employee'){
    echo "<a href='update.php'>Update</a>";
    //echo "<a href='edit.php'?id=".$row['id'].">Edit</a>";?>
    <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a><?php
  }
  else{
    echo "Role:-".$row['role']."<br>";
    echo "<a href='index.php'>home</a>";
    //echo "<a href='edit.php'?id=".$row['id'].">Edit</a>";
    ?>
    <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a><?php
  }
  

  echo "</center>";
}
?>
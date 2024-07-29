<?php
session_start();
error_reporting(0);
include('dbc.php');
$id=$_SESSION['id'];
$qr=mysqli_query($conn,"SELECT * from reg");
$qrr=mysqli_query($conn,"SELECT * from reg where id='$id'");
$admin=mysqli_fetch_array($qrr);
$role=$admin['role'];
echo "<center><table border='01'>
      <tr>
      <th>Image</th>
	  <th>Name</th>
      <th>Phone Number</th>
	  <th>Address</th>
	  
	  </tr>";

while($row=mysqli_fetch_array($qr)){
        echo "<tr>";?>
    <td><img src="<?php echo $row['file']?>"style="width:100px;height:100px;"></td>
   <?php
    echo "<td>".$row['Name']."</td>";
    // echo "<td".$row['Email']."</td>";
    // echo "<td>".$row['Password']."</td";
    echo "<td>".$row['Phone_number']."</td>";
    echo "<td>".$row['Adress']."</td>";
    // echo "<td".$row['Gender']."</td>";
    // echo "<td".$row['Skill']."</td>";
    // echo "<td".$row['City']."</td>";
    if($role=='Employee'){
       echo "";
    }
    else{
        
         ?>
        <td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
        </tr>
        <?php 
    }
}
?>
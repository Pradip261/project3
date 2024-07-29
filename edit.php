<?php
session_start();
include('dbc.php');
$id=$_REQUEST['id'];
$qr=mysqli_query($conn,"SELECT * from reg where id='$id'");
$row=mysqli_fetch_array($qr);
$_SESSION['id']=$row['id'];

?>
<center>
<form action="change.php" method="post" enctype="multipart/form-data">
Name:<input type="text" name="name_edit" id="name" value="<?php echo $row['Name'];?>"><br>
Phone Number:<input type="number" name="Phone_Number_edit" id="Phone_Number" value="<?php echo $row['Phone_number'];?>"><br>
Address:<input type="text" name="Adress_edit" id="Adress" value="<?php echo $row['Adress'];?>"><br>
File:<input type="file" name="file_edit" id="file" value="<?php echo "<img src=".$row['file'].">";?>"><br>

<input type="submit" value="update">
</form></center>
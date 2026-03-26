<?php
include 'db_connect.php';

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$specialization=$_POST['specialization'];
$phone=$_POST['phone'];

$sql="INSERT INTO Doctor(name,specialization,phone)
VALUES('$name','$specialization','$phone')";

if($conn->query($sql)==TRUE)
{
echo "Doctor added successfully";
}
else
{
echo "Error: ".$conn->error;
}
}
?>

<form method="post">

Doctor Name:
<input type="text" name="name"><br><br>

Specialization:
<input type="text" name="specialization"><br><br>

Phone:
<input type="text" name="phone"><br><br>

<input type="submit" name="submit" value="Add Doctor">

</form>
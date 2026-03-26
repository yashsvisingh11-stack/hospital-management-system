<?php
include 'db_connect.php';

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$sql="INSERT INTO Patient(name,age,gender,phone,address)
VALUES('$name','$age','$gender','$phone','$address')";

if($conn->query($sql)==TRUE)
{
echo "Patient added successfully";
}
else
{
echo "Error: ".$conn->error;
}
}
?>

<form method="post">

Name: <input type="text" name="name"><br><br>

Age: <input type="number" name="age"><br><br>

Gender:
<select name="gender">
<option>Male</option>
<option>Female</option>
</select><br><br>

Phone: <input type="text" name="phone"><br><br>

Address: <input type="text" name="address"><br><br>

<input type="submit" name="submit" value="Add Patient">

</form>
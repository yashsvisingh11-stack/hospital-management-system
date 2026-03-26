<?php
include 'db_connect.php';

if(isset($_POST['submit']))
{
$patient_id=$_POST['patient_id'];
$doctor_id=$_POST['doctor_id'];
$appointment_date=$_POST['appointment_date'];
$status=$_POST['status'];

$sql="INSERT INTO Appointment(patient_id,doctor_id,appointment_date,status)
VALUES('$patient_id','$doctor_id','$appointment_date','$status')";

if($conn->query($sql)==TRUE)
{
echo "Appointment booked successfully";
}
else
{
echo "Error: ".$conn->error;
}
}
?>

<form method="post">

Patient ID:
<input type="number" name="patient_id"><br><br>

Doctor ID:
<input type="number" name="doctor_id"><br><br>

Appointment Date:
<input type="date" name="appointment_date"><br><br>

Status:
<select name="status">
<option>Scheduled</option>
<option>Completed</option>
<option>Cancelled</option>
</select><br><br>

<input type="submit" name="submit" value="Book Appointment">

</form>
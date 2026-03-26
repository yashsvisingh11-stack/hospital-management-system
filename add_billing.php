<?php
include 'db_connect.php';

if(isset($_POST['submit']))
{
$patient_id=$_POST['patient_id'];
$amount=$_POST['amount'];
$payment_status=$_POST['payment_status'];
$bill_date=$_POST['bill_date'];

$sql="INSERT INTO Billing(patient_id,amount,payment_status,bill_date)
VALUES('$patient_id','$amount','$payment_status','$bill_date')";

if($conn->query($sql)==TRUE)
{
echo "Billing record added successfully";
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

Amount:
<input type="number" name="amount"><br><br>

Payment Status:
<select name="payment_status">
<option>Paid</option>
<option>Pending</option>
</select><br><br>

Bill Date:
<input type="date" name="bill_date"><br><br>

<input type="submit" name="submit" value="Add Bill">

</form>
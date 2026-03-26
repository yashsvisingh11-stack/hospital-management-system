<?php
include 'db_connect.php';

$sql = "SELECT Billing.bill_id,
Patient.name AS patient_name,
Billing.amount,
Billing.payment_status,
Billing.bill_date
FROM Billing
JOIN Patient ON Billing.patient_id = Patient.patient_id";

$result = $conn->query($sql);

echo "<h2>Billing Records</h2>";

if ($result->num_rows > 0) {

echo "<table border='1'>
<tr>
<th>Bill ID</th>
<th>Patient Name</th>
<th>Amount</th>
<th>Status</th>
<th>Date</th>
</tr>";

while($row = $result->fetch_assoc()) {

echo "<tr>
<td>".$row["bill_id"]."</td>
<td>".$row["patient_name"]."</td>
<td>".$row["amount"]."</td>
<td>".$row["payment_status"]."</td>
<td>".$row["bill_date"]."</td>
</tr>";
}

echo "</table>";

} else {

echo "No billing records found";

}
?>
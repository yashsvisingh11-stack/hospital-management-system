<?php
include 'db_connect.php';

$sql = "SELECT Appointment.appointment_id,
Patient.name AS patient_name,
Doctor.name AS doctor_name,
Appointment.appointment_date,
Appointment.status
FROM Appointment
JOIN Patient ON Appointment.patient_id = Patient.patient_id
JOIN Doctor ON Appointment.doctor_id = Doctor.doctor_id";

$result = $conn->query($sql);

echo "<h2>Appointment Records</h2>";

if ($result->num_rows > 0) {

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Patient</th>
<th>Doctor</th>
<th>Date</th>
<th>Status</th>
</tr>";

while($row = $result->fetch_assoc()) {

echo "<tr>
<td>".$row["appointment_id"]."</td>
<td>".$row["patient_name"]."</td>
<td>".$row["doctor_name"]."</td>
<td>".$row["appointment_date"]."</td>
<td>".$row["status"]."</td>
</tr>";
}

echo "</table>";

} else {

echo "No appointment records found";

}
?>
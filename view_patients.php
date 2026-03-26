<?php
include 'db_connect.php';

$sql = "SELECT * FROM Patient";
$result = $conn->query($sql);

echo "<h2>Patient Records</h2>";

if ($result->num_rows > 0) {

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Gender</th>
<th>Phone</th>
<th>Address</th>
</tr>";

while($row = $result->fetch_assoc()) {

echo "<tr>
<td>".$row["patient_id"]."</td>
<td>".$row["name"]."</td>
<td>".$row["age"]."</td>
<td>".$row["gender"]."</td>
<td>".$row["phone"]."</td>
<td>".$row["address"]."</td>
</tr>";
}

echo "</table>";

} else {

echo "No records found";

}
?>
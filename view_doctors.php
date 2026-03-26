<?php
include 'db_connect.php';

$sql = "SELECT * FROM Doctor";
$result = $conn->query($sql);

echo "<h2>Doctor Records</h2>";

if ($result->num_rows > 0) {

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Specialization</th>
<th>Phone</th>
</tr>";

while($row = $result->fetch_assoc()) {

echo "<tr>
<td>".$row["doctor_id"]."</td>
<td>".$row["name"]."</td>
<td>".$row["specialization"]."</td>
<td>".$row["phone"]."</td>
</tr>";
}

echo "</table>";

} else {

echo "No doctor records found";

}
?>
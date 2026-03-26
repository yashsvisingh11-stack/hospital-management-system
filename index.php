<?php
include 'db_connect.php';

/* Count Patients */
$patient_count = $conn->query("SELECT COUNT(*) AS total FROM Patient")->fetch_assoc()['total'];

/* Count Doctors */
$doctor_count = $conn->query("SELECT COUNT(*) AS total FROM Doctor")->fetch_assoc()['total'];

/* Example: Doctors working today (demo logic) */
$today_doctors = $conn->query("SELECT COUNT(*) AS total FROM Doctor")->fetch_assoc()['total'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Hospital Dashboard</title>

<style>

body {
margin: 0;
font-family: Arial;
background: url('https://images.unsplash.com/photo-1586773860418-d37222d8fce3') no-repeat center center fixed;
background-size: cover;
}

/* Dark overlay */
.overlay {
background: rgba(0,0,0,0.6);
min-height: 100vh;
padding-bottom: 40px;
}

/* Header */
.header {
color: white;
text-align: center;
padding: 25px;
font-size: 32px;
font-weight: bold;
}

/* Cards layout */
.container {
display: flex;
flex-wrap: wrap;
justify-content: center;
}

/* Dashboard cards */
.card {
background: white;
width: 260px;
margin: 20px;
padding: 25px;
border-radius: 12px;
text-align: center;
box-shadow: 0px 5px 12px rgba(0,0,0,0.3);
}

/* Buttons */
.btn {
display: block;
margin-top: 15px;
padding: 10px;
background: #3498db;
color: white;
text-decoration: none;
border-radius: 6px;
}

.btn:hover {
background: #1f6692;
}

/* Reviews section */
.review-box {
background: white;
margin: 25px auto;
width: 70%;
padding: 20px;
border-radius: 10px;
}

.review {
margin: 10px 0;
padding: 10px;
background: #f4f6f7;
border-radius: 6px;
}

</style>

</head>

<body>

<div class="overlay">

<div class="header">
Apex Multispeciality Hospital 
</div>

<div class="container">

<div class="card">
<h2>Total Patients</h2>
<p><?php echo $patient_count; ?></p>
<a href="add_patient.php" class="btn">Add Patient</a>
<a href="view_patients.php" class="btn">View Patients</a>
</div>

<div class="card">
<h2>Total Doctors</h2>
<p><?php echo $doctor_count; ?></p>
<a href="add_doctor.php" class="btn">Add Doctor</a>
<a href="view_doctors.php" class="btn">View Doctors</a>
</div>

<div class="card">
<h2>Add Appointments</h2>
<p><?php echo $today_doctors; ?></p>
<a href="add_appointment.php" class="btn">Add Appointments</a>
<a href="view_appointments.php" class="btn">View Appointments</a>
</div>

<div class="card">
<h2>Billing Section</h2>
<a href="add_billing.php" class="btn">Add Billing</a>
<a href="view_billing.php" class="btn">View Billing</a>
</div>

</div>





<!-- Patient Reviews Section -->

<div class="review-box">
<h3>Patient Reviews</h3>

<div class="review">Excellent service and caring staff.</div>
<div class="review">Doctors explained everything clearly.</div>
<div class="review">Very clean and professional hospital.</div>

</div>


<!-- Doctor Reviews Section -->

<div class="review-box">
<h3>Doctor Reviews</h3>

<div class="review">Dr Sharma – Highly experienced cardiologist</div>
<div class="review">Dr Mehta – Friendly and supportive</div>
<div class="review">Dr Kaur – Excellent diagnosis accuracy</div>

</div>

</div>

</body>
</html>
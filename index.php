<?php
include 'functions.php';

// Hiển thị danh sách đơn thuốc
$result = getPrescriptions();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription Management</title>
</head>
<body>
    <h2>Prescription List</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Patient Name</th>
            <th>Doctor Name</th>
            <th>Medication</th>
            <th>Dosage</th>
            <th>Date Prescribed</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['patient_name']}</td>
                        <td>{$row['doctor_name']}</td>
                        <td>{$row['medication']}</td>
                        <td>{$row['dosage']}</td>
                        <td>{$row['date_prescribed']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No prescriptions found</td></tr>";
        }
        ?>
    </table>

    <h2>Add New Prescription</h2>
    <form action="" method="post">
        <label for="patient_name">Patient Name:</label>
        <input type="text" name="patient_name" required><br>

        <label for="doctor_name">Doctor Name:</label>
        <input type="text" name="doctor_name" required><br>

        <label for="medication">Medication:</label>
        <input type="text" name="medication" required><br>

        <label for="dosage">Dosage:</label>
        <input type="text" name="dosage" required><br>

        <input type="submit" name="submit" value="Add Prescription">
    </form>

    <?php
    // Xử lý thêm đơn thuốc mới
    if (isset($_POST['submit'])) {
        $patient_name = $_POST['patient_name'];
        $doctor_name = $_POST['doctor_name'];
        $medication = $_POST['medication'];
        $dosage = $_POST['dosage'];

        if (addPrescription($patient_name, $doctor_name, $medication, $dosage)) {
            echo "<p>Prescription added successfully.</p>";
        } else {
            echo "<p>Error adding prescription.</p>";
        }
    }
    ?>
</body>
</html>

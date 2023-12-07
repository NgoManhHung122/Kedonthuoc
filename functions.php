<?php
include 'config.php';

function getPrescriptions() {
    global $conn;
    $sql = "SELECT * FROM prescriptions";
    $result = $conn->query($sql);
    return $result;
}

function addPrescription($patient_name, $doctor_name, $medication, $dosage) {
    global $conn;
    $sql = "INSERT INTO prescriptions (patient_name, doctor_name, medication, dosage, date_prescribed) VALUES ('$patient_name', '$doctor_name', '$medication', '$dosage', NOW())";
    
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}
?>

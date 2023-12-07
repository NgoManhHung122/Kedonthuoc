-- Tạo cơ sở dữ liệu
drop database pharmacy;
CREATE DATABASE IF NOT EXISTS pharmacy;
USE pharmacy;

CREATE TABLE IF NOT EXISTS prescriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_name VARCHAR(255) NOT NULL,
    doctor_name VARCHAR(255) NOT NULL,
    medication VARCHAR(255) NOT NULL,
    dosage VARCHAR(50) NOT NULL,
    date_prescribed TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO prescriptions (patient_name, doctor_name, medication, dosage) VALUES
('Ha Nhat Phong', 'Dr. Phong', 'Aspirin', '10mg'),
('Ngo Manh Hung', 'Dr. Hung', 'Ibuprofen', '20mg'),
('Vo Van Thai', 'Dr. Thai', 'Paracetamol', '15mg'),
('Vo Van Huy', 'Dr. Huy', 'Omeprazole', '15mg');

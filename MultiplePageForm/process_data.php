<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Personal information
    $student_id = $_POST['student_id'];
    $student_name = $_POST['student_name'];
    $student_email = $_POST['student_email'];
    $student_age = $_POST['student_age'];
    $aadhar_number = $_POST['aadhar_number'];
    $address = $_POST['address'];
    $date_of_birth = $_POST['date_of_birth'];
    $phone_number = $_POST['phone_number'];
    $emergency_contact = $_POST['emergency_contact'];
    $emergency_phone = $_POST['emergency_phone'];
    $relationship = $_POST['relationship'];

    // Academic information
    $student_roll = $_POST['student_roll'];
    $student_attendance = $_POST['student_attendance'];
    $student_class = $_POST['student_class'];
    $student_section = $_POST['student_section'];
    $maths_marks = $_POST['maths_marks'];
    $science_marks = $_POST['science_marks'];
    $computer_marks = $_POST['computer_marks'];
    $english_marks = $_POST['english_marks'];
    $hindi_marks = $_POST['hindi_marks'];
    $social_studies_marks = $_POST['social_studies_marks'];
    $total_marks = $_POST['total_marks'];
    $percentage = $_POST['percentage'];

    // Check if data already exists for the student ID
    $sql_check_existing = "SELECT * FROM students WHERE student_id = '$student_id'";
    $result_check_existing = $conn->query($sql_check_existing);

    if ($result_check_existing->num_rows > 0) {
        // Update data in students table
        $sql_update_students = "UPDATE students SET student_name = '$student_name', student_email = '$student_email', student_age = '$student_age', aadhar_number = '$aadhar_number', address = '$address', date_of_birth = '$date_of_birth', phone_number = '$phone_number', emergency_contact = '$emergency_contact', emergency_phone = '$emergency_phone', relationship = '$relationship' WHERE student_id = '$student_id'";

        if ($conn->query($sql_update_students) !== TRUE) {
            echo "Error updating students data: " . $conn->error;
        }

        // Update data in academic table
        $sql_update_academic = "UPDATE academic SET student_roll = '$student_roll', student_attendance = '$student_attendance', student_class = '$student_class', student_section = '$student_section', maths_marks = '$maths_marks', science_marks = '$science_marks', computer_marks = '$computer_marks', english_marks = '$english_marks', hindi_marks = '$hindi_marks', social_studies_marks = '$social_studies_marks', total_marks = '$total_marks', percentage = '$percentage' WHERE student_id = '$student_id'";

        if ($conn->query($sql_update_academic) !== TRUE) {
            echo "Error updating academic data: " . $conn->error;
        }

        echo '<script>alert("Data updated successfully.");</script>';
    } else {
        // Insert data into students table
        $sql_students = "INSERT INTO students (student_id, student_name, student_email, student_age, aadhar_number, address, date_of_birth, phone_number, emergency_contact, emergency_phone, relationship)
        VALUES ('$student_id', '$student_name', '$student_email', '$student_age', '$aadhar_number', '$address', '$date_of_birth', '$phone_number', '$emergency_contact', '$emergency_phone', '$relationship')";

        if ($conn->query($sql_students) !== TRUE) {
            echo "Error: " . $sql_students . "<br>" . $conn->error;
        }

        // Insert data into academic table
        $sql_academic = "INSERT INTO academic (student_id, student_roll, student_attendance, student_class, student_section, maths_marks, science_marks, computer_marks, english_marks, hindi_marks, social_studies_marks, total_marks, percentage)
        VALUES ('$student_id', '$student_roll', '$student_attendance', '$student_class', '$student_section', '$maths_marks', '$science_marks', '$computer_marks', '$english_marks', '$hindi_marks', '$social_studies_marks', '$total_marks', '$percentage')";

        if ($conn->query($sql_academic) !== TRUE) {
            echo "Error: " . $sql_academic . "<br>" . $conn->error;
        }

        echo '<script>alert("Data inserted successfully.");</script>';
    }
}

$conn->close();
?>

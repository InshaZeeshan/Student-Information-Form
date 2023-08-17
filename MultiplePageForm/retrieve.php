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

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["student_id"])) {
        $student_id = $_GET["student_id"];

        $sql_students = "SELECT * FROM students WHERE student_id = '$student_id'";
        $sql_academic = "SELECT * FROM academic WHERE student_id = '$student_id'";

        $result_students = $conn->query($sql_students);
        $result_academic = $conn->query($sql_academic);

        if ($result_students->num_rows > 0 && $result_academic->num_rows > 0) {
            $row_students = $result_students->fetch_assoc();
            $row_academic = $result_academic->fetch_assoc();

            $data = array_merge($row_students, $row_academic);
            echo json_encode($data);
        } else {
            echo json_encode(null);
        }
    }
}

$conn->close();
?>



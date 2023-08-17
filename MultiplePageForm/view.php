




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">


    <style>
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            font-weight: 1000;
        }

        .container {
            max-width: 800px;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
           flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        label {
            font-weight: 600;
            min-width: 160px;
            text-align: right;
        }

        input[type="text"],
        input[type="tel"] {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 8px;
            width: 200px;
        }

        button {
            background-color: darkgray;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: black;
        }

        h2 {
            margin-top: 30px;
            font-weight: 800;
            margin-left: 510PX;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
            font-weight: bolder;
        }

        th {
            background-color: #f2f2f2;
            font-weight: 1200;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>


</head>
<body>
    <h1>STUDENT DATA</h1>
    <div class="container">
        <form method="GET">
            <label for="student_id">ENTER STUDENT ID:</label>
            <input type="text" id="student_id" name="student_id" required>
           
            
            <button type="submit">VIEW</button>
            <br>


        </form>
    </div>

    <?php
    if (isset($_GET['student_id'])) {
        $conn = mysqli_connect("localhost", "root", "", "form");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $student_id = $_GET['student_id'];

        // Fetch data from students table
        $sql_students = "SELECT * FROM students WHERE student_id = '$student_id'";
        $result_students = mysqli_query($conn, $sql_students);
        $student_data = mysqli_fetch_assoc($result_students);

        //$student_roll = $_GET['student_roll'];
        // Fetch data from academic table
        $sql_academic = "SELECT * FROM academic WHERE student_id = '$student_id'";
        $result_academic = mysqli_query($conn, $sql_academic);
        $academic_data = mysqli_fetch_assoc($result_academic);

        mysqli_close($conn);
        ?>

        <div class="container1">
            <h2>PERSONAL INFORMATION</h2>
            <table>
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Aadhar Number</th>
                    <th>Address</th>
                    <th>Date Of Birth</th>
                    <th>Phone Number</th>
                    <th>Emergency Contact</th>
                    <th>Emergency Phone</th>
                    <th>Relationship with Student</th>
                </tr>
                <tr>
                    <td><?php echo $student_data['student_id']; ?></td>
                    <td><?php echo $student_data['student_name']; ?></td>
                    <td><?php echo $student_data['student_email']; ?></td>
                    <td><?php echo $student_data['student_age']; ?></td>
                    <td><?php echo $student_data['aadhar_number']; ?></td>
                    <td><?php echo $student_data['address']; ?></td>
                    <td><?php echo $student_data['date_of_birth']; ?></td>
                    <td><?php echo $student_data['phone_number']; ?></td>
                    <td><?php echo $student_data['emergency_contact']; ?></td>
                    <td><?php echo $student_data['emergency_phone']; ?></td>
                    <td><?php echo $student_data['relationship']; ?></td>
                </tr>
            </table>
        </div>

        <div class="container1">
            <h2>ACADEMIC INFORMATION</h2>
            <table>
                <tr>
                    <th>Roll Number</th>
                    <th>Attendance</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Maths Marks</th>
                    <th>Science Marks</th>
                    <th>Computer Marks</th>
                    <th>English Marks</th>
                    <th>Hindi Marks</th>
                    <th>Social Studies Marks</th>
                    <th>Total Marks</th>
                    <th>Percentage</th>
                </tr>
                <tr>
                    <td><?php echo $academic_data['student_roll']; ?></td>
                    <td><?php echo $academic_data['student_attendance']; ?></td>
                    <td><?php echo $academic_data['student_class']; ?></td>
                    <td><?php echo $academic_data['student_section']; ?></td>
                    <<td><?php echo $academic_data['maths_marks']; ?></td>
                    <td><?php echo $academic_data['science_marks']; ?></td>
                    <td><?php echo $academic_data['computer_marks']; ?></td>
                    <td><?php echo $academic_data['english_marks']; ?></td>
                    <td><?php echo $academic_data['hindi_marks']; ?></td>
                    <td><?php echo $academic_data['social_studies_marks']; ?></td>
                    <td><?php echo $academic_data['total_marks']; ?></td>
                    <td><?php echo $academic_data['percentage']; ?></td>
                </tr>
            </table>
        </div>
    <?php } ?>



    <script>
        function loadDataForUpdate() {
            var studentId = document.getElementById("student_id").value;
            var studentRoll = document.getElementById("student_roll").value;
            window.location.href = "update.php?student_id=" + student_Id + "&student_roll=" + student_roll;
        }
    </script>

</body>
</html>
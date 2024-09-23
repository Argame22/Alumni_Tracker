<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_no = $_POST['student_no'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $department = $_POST['department'];
    $program = $_POST['program'];
    $year_graduated = $_POST['year_graduated'];
    $contact_no = $_POST['contact_no'];
    $personal_email = $_POST['personal_email'];
    $working_status = $_POST['working_status'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '12345', 'Alumni_Database');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert into 2024-2025 table
    $sql1 = "INSERT INTO `2024-2025` (Student_No, Last_name, First_name, Department, Program, Year_graduated, Contact_no, Personal_email)
             VALUES ('$student_no', '$last_name', '$first_name', '$department', '$program', '$year_graduated', '$contact_no', '$personal_email')";

    // Insert into 2024-2025-ws table
    $sql2 = "INSERT INTO `2024-2025-ws` (Last_name, First_name, Department, Year_graduated, Contact_no, Personal_email, Working_status)
             VALUES ('$last_name', '$first_name', '$department', '$year_graduated', '$contact_no', '$personal_email', '$working_status')";

    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Alumni Data</title>
    <style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Alumni Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: darkgreen;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .header img {
            height: 100px; 
            margin-right: 20px; 
        }
        .form-container {
            width: 50%;
            margin: 20px auto;
            background-color: darkgreen;
            padding: 20px;
            border-radius: 5px;
            color: white;
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="number"],
        .form-container select {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #f4f4f4;
            color: black;
        }
        .form-container input[type="submit"] {
            background-color: white;
            color: darkgreen;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="header">
        <img src="logo.png" alt="School Logo">
        <h1>Pamantasan ng Lungsod ng Muntinlupa</h1>
        <h2>Add New Alumni Data</h2>
    </div>

    <div class="form-container">
        <form method="POST" action="add_alumni.php">
            <label for="student_no">Student No:</label>
            <input type="text" id="student_no" name="student_no" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required>

            <label for="program">Program:</label>
            <input type="text" id="program" name="program" required>

            <label for="year_graduated">Year Graduated:</label>
            <input type="number" id="year_graduated" name="year_graduated" required>

            <label for="contact_no">Contact No:</label>
            <input type="text" id="contact_no" name="contact_no" required>

            <label for="personal_email">Personal Email:</label>
            <input type="email" id="personal_email" name="personal_email" required>

            <label for="working_status">Working Status:</label>
            <input type="text" id="working_status" name="working_status">

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>
<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "Alumni_Database";


// Database connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from both tables
$sql = "SELECT a.ID, b.Alumni_id, a.Last_name, a.First_name, a.Department, a.Program, a.Year_graduated, a.Contact_no, a.Personal_email, b.Working_status
        FROM `2024-2025` a
        LEFT JOIN `2024-2025-ws` b ON a.ID = b.Alumni_id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Tracking Dashboard</title>
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
        .container {
            width: 80%;
            margin: 20px auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: darkgreen;
            color: white;
        }
        .add-button {
            background-color: darkgreen;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="header">
        <img src="logo.png" alt="School Logo">
        <h1>Pamantasan ng Lungsod ng Muntinlupa</h1>
        <h2>Alumni Tracking Dashboard</h2>
    </div>

    <div class="container">
        <a href="add_alumni.php" class="add-button">Add New Alumni Data</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Alumni ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Department</th>
                <th>Program</th>
                <th>Year Graduated</th>
                <th>Contact No.</th>
                <th>Personal Email</th>
                <th>Working Status</th>
            </tr>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['ID'] ?></td>
                        <td><?= $row['Alumni_id'] ?></td>
                        <td><?= $row['Last_name'] ?></td>
                        <td><?= $row['First_name'] ?></td>
                        <td><?= $row['Department'] ?></td>
                        <td><?= $row['Program'] ?></td>
                        <td><?= $row['Year_graduated'] ?></td>
                        <td><?= $row['Contact_no'] ?></td>
                        <td><?= $row['Personal_email'] ?></td>
                        <td><?= $row['Working_status'] ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="10">No data available</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>

</body>
</html>

<?php
$conn->close();
?>
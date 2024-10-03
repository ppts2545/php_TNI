<?php
// Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query fetch all contacts from Database
$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>All Contacts</title>
</head>
<body>
    <h1>All Contacts</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Manage</th>
        </tr>

        <?php
        // Check if there any contacts
        if ($result->num_rows > 0) {
            // Loop through each contact and display
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['message']}</td>
                    <td>
                        <a href='delete.php?id={$row['id']}'>Delete</a>
                        <a href='edit.php?id={$row['id']}'>Edit</a>
                    </td>
                </tr>";
            }
        } else {
            // If no contacts are found show a message
            echo "<tr><td colspan='4'>No data available</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>

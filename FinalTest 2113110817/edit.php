<?php
// Database 
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "contact_db";

//Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check successful connected
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// GetID from URL
$id = $_GET['id'];

//query get contactdetails
$sql = "SELECT * FROM contacts WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Check form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // update the contact details
    $update_sql = "UPDATE contacts SET name='$name', email='$email', message='$message' WHERE id=$id";

    // Execute the update query
    if ($conn->query($update_sql) === TRUE) {
        header("Location: allcontact.php");
        exit(); 
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required><?php echo $row['message']; ?></textarea><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>

<?php
$conn->close();
?>

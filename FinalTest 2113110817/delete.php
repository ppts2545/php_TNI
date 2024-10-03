<?php
// Database 
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "contact_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// ID  contact delete from the URL
$id = $_GET['id'];

// delete the contact
$sql = "DELETE FROM contacts WHERE id=$id";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Contact deleted successfully!";
} else {
    echo "Error deleting contact: " . $conn->error;
}


$conn->close();

echo "<br><a href='allcontact.php'>Back to All Contacts</a>";
?>

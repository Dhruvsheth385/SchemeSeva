<?php
// Establish a connection to the database
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "schemeseva1"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $occupation = $_POST['occupation'];
    $category = $_POST['category'];

    // Prepare SQL query to insert data into database
    $sql = "INSERT INTO additionalinfo (age, gender, occupation, category) VALUES ('$age', '$gender', '$occupation', '$category')";
    if (mysqli_query($conn, $sql)) {
        header("Location:Crtpass.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
}

// Close connection
$conn->close();
?>

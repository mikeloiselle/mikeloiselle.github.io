<?php
// Database credentials
$host = 'localhost';
$dbname = 'penAndPaper';
$username = 'pdo';
$password = "L9CqtB6L";

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully to the penAndPaper database!<br>";

    // Example query to fetch all rows from a table (replace 'your_table' with an actual table name)
    $sql = "SELECT * FROM actor";
    $stmt = $pdo->query($sql);

    // Fetch all results as an associative array
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display the results
    foreach ($rows as $row) {
        echo 'ID: ' . $row['id'] . ' | Name: ' . $row['name'] . '<br>';
    }
} catch (PDOException $e) {
    // Handle the exception if connection fails
    echo "Connection failed: " . $e->getMessage();
}
?>

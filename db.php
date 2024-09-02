<?php
$host = 'localhost';
$dbname = 'todo_list_db';
$username = 'root';  // Change this if you have a different username
$password = '';      // Add your password if you have set one

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>

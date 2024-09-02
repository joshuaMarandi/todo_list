<?php
// Include database connection
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Insert the task into the database using PDO
    $stmt = $pdo->prepare("INSERT INTO tasks (title, description) VALUES (:title, :description)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);

    if ($stmt->execute()) {
        // Redirect to view.php after successful insertion
        header('Location: view.php');
        exit;
    } else {
        // Handle errors if the insertion fails
        echo "Error: Unable to add the task.";
    }
}
?>

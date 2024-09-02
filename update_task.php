<?php
// Include database connection
include 'db.php';

// Check if the ID and status were passed in the URL
if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];

    // Prepare the SQL query to update the task status
    $stmt = $pdo->prepare("UPDATE tasks SET status = :status WHERE id = :id");
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':id', $id);

    // Execute the query
    if ($stmt->execute()) {
        // Redirect back to the view page
        header('Location: view.php');
        exit;
    } else {
        echo "Error: Could not update the task.";
    }
} else {
    echo "Error: Missing task ID or status.";
}
?>

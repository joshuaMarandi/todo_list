<?php include 'db.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="logo.png" type="image/png">
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
                <form action="add_task.php" method="POST">
            <input type="text" name="title" placeholder="Task Title" required>
            <textarea name="description" placeholder="Task Description" rows="4"></textarea>
            <input type="submit" value="Add Task">
            <a href="view.php">View All Tasks</a>
        </form>

    </div>
</body>
</html>

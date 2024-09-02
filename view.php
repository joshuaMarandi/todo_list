<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Tasks</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="logo.png" type="image/png">

</head>
<body>
    <div class="container">
        <h1>Task List</h1>

        <ul class="task-list">
            <?php
            $stmt = $pdo->query("SELECT * FROM tasks ORDER BY created_at DESC");
            while ($task = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $class = $task['status'] === 'completed' ? 'completed' : '';
                echo "<li class='task-item $class'>
                        <span class='task-title'>{$task['title']}</span>
                        <p class='task-desc'>{$task['description']}</p>
                        <div class='task-actions'>
                            <a href='update_task.php?id={$task['id']}&status=completed'>✔️</a>
                            <a href='delete_task.php?id={$task['id']}'>❌</a>
                        </div>
                      </li>";
            }
            ?>
        </ul>
        <a href="index.php" class="btn green">Home</a>
    </div>
</body>
</html>

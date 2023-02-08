<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tasks</h1>
    <strong>Completadas::</strong>
    <?php foreach($completedTasks as $task): ?>
        <ul>
            <li><?php echo $task['title']; ?></li>
        </ul>
    <?php endforeach; ?>

    <strong>Pendientes::</strong>
    <?php foreach($pendingTasks as $task): ?>
        <ul>
            <li><?php echo $task['title']; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
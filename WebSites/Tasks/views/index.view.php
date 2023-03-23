<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h3> Tareas completas</h3>
        <?php foreach ($completedTasks as $completedTask):?>
            <ul>
                <li> <?php echo $completedTask->title; ?></li><br>
            </ul>
        <?php endforeach; ?>
    </div>

    <div>
        <h3> Tareas pendientes</h3>
        <?php foreach ($pendingTasks as $pendingTask):?>
            <ul>
                <li> <?php echo $pendingTask->title; ?></li><br>
            </ul>
        <?php endforeach; ?>
    </div>
</body>
</html>
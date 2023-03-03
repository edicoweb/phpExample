<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create-task.php" method="post">
        <input type="text" name="title" placeholder="Titulo">
        <select name="completed" id="completed">
            <option value="0">pendiente</option>
            <option value="1">completado</option>
        </select>
        <button type="submit">Guardar</button>
    </form>


    <h1>Tasks</h1>
    <strong>Completadas::</strong>
    <?php foreach($completedTasks as $task): ?>
        <ul>
            <li>
                <?php echo $task->title; ?>
                <form style="display: inline;" action="toggle.task.php" method="post">
                    <input type="hidden" name="completed" value="0">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <button type="submit"> X </button>
                </form>
            </li>
        </ul>
    <?php endforeach; ?>

    <strong>Pendientes::</strong>
    <?php foreach($pendingTasks as $task): ?>
        <ul>
            <li>
                <?php echo $task->title; ?>
                <form style="display: inline;" action="toggle.task.php" method="post">
                    <input type="hidden" name="completed" value="1">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <button type="submit"> V </button>
                </form>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
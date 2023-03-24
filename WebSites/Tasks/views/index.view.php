<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create.task.php" method="post">
        <input type="text" name="title" placeholder="Titulo">
        <select name="completed" id="completed">
            <option value="">Seleccionar</option>
            <option value="1">Completado</option>
            <option value="0">Pendiente</option>
        </select>
        <button type="submit">Guardar</button>
    </form>

    <div>
        <h3> Tareas completas</h3>
        <?php foreach ($completedTasks as $task):?>
            <ul>
                <li>
                    <?php echo $task->title; ?>
                    <form style="display: inline;" action="edit.task.php" method="post">
                        <input type="hidden" name="completed" value="0">
                        <input type="hidden" name="id" value="<?php echo $task->id ?>">
                        <button type="submit">Pasar a pendientes</button>
                    </form>
                    <form style="display: inline"; action="delete.task.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $task->id ?>">
                        <button style="background: #ff0000; color: #fff; border: none;" type="submit">Delete</button>
                    </form>
                </li><br>
            </ul>
        <?php endforeach; ?>
    </div>

    <div>
        <h3> Tareas pendientes</h3>
        <?php foreach ($pendingTasks as $task):?>
            <ul>
                <li>
                    <?php echo $task->title; ?>
                    <form style="display: inline;" action="edit.task.php" method="post">
                        <input type="hidden" name="completed" value="1">
                        <input type="hidden" name="id" value="<?php echo $task->id ?>">
                        <button type="submit">Completar</button>
                    </form>
                    <form style="display: inline"; action="delete.task.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $task->id ?>">
                        <button style="background: #ff0000; color: #fff; border: none;" type="submit">Delete</button>
                    </form>
                </li><br>
            </ul>
        <?php endforeach; ?>
    </div>
</body>
</html>
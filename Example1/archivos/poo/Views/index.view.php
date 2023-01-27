<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <ul>
        <h2>Cursos Completados</h2>
        <?php foreach($coursesCompleted as $courseCompleted): ?>
               <li><?= $courseCompleted->title ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>Cursos Incompletados</h2>
    <ul>
        <?php foreach($coursesIncompleted as $courseIncompleted): ?>
            <li><?= $courseIncompleted->title; ?></li>
        <?php endforeach; ?>
    </ul>
</head>
<body>

</body>
</html>
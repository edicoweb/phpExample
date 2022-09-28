<?php
    if(isset($_COOKIE['background-color'])){
        $color = $_COOKIE['background-color'];
    } else {
        $color = 'red';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            background-color: <?php echo $color; ?>;
        }
    </style>
</head> 
<body>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sit distinctio vero delectus voluptas odio labore porro provident fugiat atque sunt assumenda temporibus dolorem ex sint modi magnam iure vel. </p>
</body>
</html>
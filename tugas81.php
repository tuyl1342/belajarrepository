<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $uang=30;
    //kondisi else
    if ($uang>=25){
        echo "Anda dapat membeli sikat gigi ";
    }
    else if ($uang <=20) {
        echo "Anda dapat membeli shampo ";
    }
    else{
        echo "Anda belum dapat membeli apapun ";
    }
    ?>
</body>
</html>
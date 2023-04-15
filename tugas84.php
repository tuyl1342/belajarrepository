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
    $umur=6;
    //kondisi else
    if ($umur>=20){
        echo "Anda Sudah tidak minum susu ";
    }
    else if ($umur >=18) {
        echo "Anda sudah jarang minum susu ";
    }
    else{
        echo "Anda masih minum susu ibu";
    }
    ?>
</body>
</html>
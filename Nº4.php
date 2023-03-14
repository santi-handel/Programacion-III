<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nº4</title>
</head>
<body>
    <?php 
        $num=rand(1,100); 
        echo $num;
        if ($num < 50){
            echo $num + "es menor a 50";
        } 
        elseif ($num = 50){
            echo $num + "es igual a 50";
        }
        elseif ($num > 50){
            echo $num + "es mayor a 50";
        }
        
    ?>
</body>
</html>
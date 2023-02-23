<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LEAP YEAR</h1>
    
    <?php

        for($i=1980;$i<=2030;$i++){
            if($i%4==0){
                echo "<br>";
                echo "$i"." "."is a leap year". "<br>";
            }
            else{
                echo "$i"." ". "is not a leap year". "<br>";
            }
        }

    ?>
</body>
</html>
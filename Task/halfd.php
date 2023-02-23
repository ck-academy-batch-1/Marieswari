<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>NESTED LOOP</h1>
    
    <?php

        for($i=0;$i<=4;$i++){
            for($j=0;$j<=$i;$j++){
                echo "*";
            }
            echo "<br>";
        }
        for($v=5;$v>=1;$v--){
            for($k=1;$k<=$v;$k++){
                if($k==0){
                break;
                }
                echo "*";
            }
            echo "<br>";   
        }

    ?>
</body>
</html>
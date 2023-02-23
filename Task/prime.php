<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PRIME NUMBERS</h1>
    <?php
    
        echo "The Prime Numbers are......";
        echo "<br>"."<br>";
        for($i=0;$i<=100;$i++){
            $k=1;
            for($j=2;$j<$i;$j++){
                if($i%$j==0){
                    $k=0;
                    break;
                }
            }
            
            if($k==1){
                
                echo "$i". " ";
            }
        }

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FIBONACCI SERIES OF 10</h1>
    <?php
    
        $x=0;
        while($x<10){
            static $y=0;
            static  $z=1;
            echo $y."<br>";
            echo $z."<br>";
            $k=$y+$z;
            $y=$z;
            $z=$k;
            $x++;
            echo $k."<br>"."<br>";
        }
        ?>

        <h1>FIBONACCI </h1>

        <?php
        
        $x=0;
        $y=0;
        $z=1;
        echo $y."<br>"."<br>";
        echo $z."<br>"."<br>";
        while($x<10){
            
            $k=$y+$z;
            $y=$z;
            $z=$k;
            $x++;
            echo $k."<br>"."<br>";
        }
    ?>
    
</body>
</html>
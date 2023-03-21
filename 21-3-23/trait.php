<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traits</title>
</head>
<body>
<?php
        echo "<h3>TRAITS</h3>";
        trait flowers
        {
            public function rose()
            {
                echo "According to the Guinness Book of World Records, roses are the oldest species of plant to be grown as decoration.";
            }
            public function tulip()
            {
                echo "Tulips are a genus of spring-blooming perennial herbaceous bulbiferous geophytes. 
                The flowers are usually large, showy and brightly coloured, generally red, pink, yellow, or white.";
            }
        }
        class flower_info
        {
            use flowers;
        }
        $rose = new flower_info();
        $rose -> rose();
        echo "<br><br>";
        $tulip = new flower_info();
        $tulip -> tulip();
    ?>
</body>
</html>
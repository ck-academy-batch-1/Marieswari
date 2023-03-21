<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
<?php
        echo "<h3>INHERITANCE</h3>";
        class accessories
        {
            public $a_name;
            public $a_color;
            function __construct($name,$color)
            {
                $this->a_name=$name;
                $this->a_color=$color;
            }
        }
        class withFreeDelivery extends accessories
        {
            public $free_delivery;
            function __construct($free_delivery)
            {
                $this->free_delivery=$free_delivery;
            }
            
        }
        $accessorie_1=new accessories("Watch","Black");
        echo $accessorie_1->a_name;
        echo "<br>".$accessorie_1->a_color;

    ?>
</body>
</html>
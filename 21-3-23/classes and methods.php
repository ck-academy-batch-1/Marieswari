<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and Methods</title>
</head>
<body>
    <?php
        echo "<h2> CLASSES AND METHODS </h2>";
        class fruit{
            public $name;
            public $color;
            function fruit(iterable $name){
                foreach($name as $fru){
                    $this->name=$fru;
                    echo $fru."<br>";
                }
            }
            function print(){
                return $this->name;
            }
            function color(iterable $color){
                echo "<br>";
                foreach($color as $col){
                    $this->color=$col;
                    echo $col."<br>";
                }
            }
            function printColor(){
                return $this->color;
            }
        }
        $fruits=['guava','orange','watermelon','banana'];
        $color=['red','blue','green','white'];
        $f1=new fruit();
        $f1->fruit($fruits);
        $f1->color($color);
        echo "<br>"."<br>".$f1->printColor()."<br>";
        echo "<br>".$f1->print() ."<br>";
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calculating the area of Triangle, Circle, Rectangle and Square</h2>
    <?php
        class shape{
            public $val1;
            public $val2;
            public $area;
            function __construct($val1,$val2){
                $this->val1=$val1;
                $this->val2=$val2;
                $area=0.5*$val1*$val2;
            }
            function triangle(){
                $area=0.5*$this->val1*$this->val2;
                return "Area of Triange of height $this->val1 and base value of $this->val2 is". " ". $area;
            }
            function rectangle(){
                $area=$this->val1*$this->val2;
                return "Area of Rectangle of lenght $this->val1 and breadth $this->val2 is". " ". $area;
            }
            function square(){
                $area=$this->val1**2;
                return "Area of square of side $this->val1 is ". " ". $area;
            }
            function circle(){
                $area=pi()*($this->val1**2);
                return "Area of circle of radius $this->val1". " ". $area;
            }
            function display(){
                return $this->area;
                return $this-> val2."aaaaaa";
            }
        }

        $value = new shape(4,7);
        echo $value ->triangle()."<br>"."<br>";
        echo $value ->rectangle()."<br>"."<br>";
        echo $value ->square()."<br>"."<br>";
        echo $value ->circle();

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    
    <form method="post">  
    Enter the Number:<br>  
    <input type="text" name="num" id="number">  
    <input type="submit" name="submit" value="Submit" >  
    </form>  
    <?php   
    if($_POST){  
        $num = $_POST['num'];  
        $n = 1;  
        echo "Factorial of $num:<br><br>";  
        for ($i = 1; $i <= $num; $i++){         
            $n = $n * $i;  
            }  
            echo $n . "<br>";  
    }  
    ?>

    <p>using functions</p>
   
    <?php
    $n = $_POST['num'];  
        class Fact {
        private $n;
        private $result;
        
        public function __construct($n) {
            $this->n = $n;
        }
        
        public function calculate() {
            $factorial = 1;
            for($i = 1; $i <= $this->n; $i++) {
            $factorial *= $i;
            }
            $this->result = $factorial;
        }
        
        public function getResult() {
            return $this->result;
        }
        }

        $factorial = new Fact($n);
        $factorial->calculate();
        $result = $factorial->getResult();
        echo "The factorial is: " . $result;


    ?>
</body>
</html>
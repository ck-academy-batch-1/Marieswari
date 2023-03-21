<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculate</title>
</head>
<body>
    <h2>Calculator</h2>
    <form  method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        Enter the 1st Value : <input type="text" name="num1" ><br><br>
        Enter the 2nd Value : <input type="text" name="num2" ><br><br>
        <input type="submit" name="opr" value="add">
        <input type="submit" name="opr" value="sub">
        <input type="submit" name="opr" value="mul">
        <input type="submit" name="opr" value="div">
        <input type="submit" name="opr" value="exponent">
        <br><br>
       
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $n1 = (int)$_POST['num1'];
        $n2 = (int)$_POST['num2'];
        $opr = $_POST['opr'];
        if(empty($n1)||empty($n2)){
            echo "Enter the Values";
        }else{
            if ($opr=="add") {
                $o="+";
                $ans=$n1 + $n2;
            }elseif ($opr=="sub") {
                $o="-";
                $ans=$n1 -$n2;
            }elseif ($opr=="mul") {
                $o="x";
                $ans=$n1 * $n2;
            }elseif ($opr=="div"){
                $o="/";
                $ans=$n1 / $n2;
            }else{
                $o="^";
                $ans=$n1 ** $n2;
            }
            echo " Result : ".$n1." ".$o." " .$n2." "."=". " " .$ans;
        }
    }
    ?>
</body>
</html>
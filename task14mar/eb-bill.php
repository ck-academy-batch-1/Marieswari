<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EB-Bill</title>
    <style>
        h3{
            text-align:center;
        }
        form{
            margin-left:auto;
            margin-right:auto;
        }
    </style>
</head>
<body>
    <h3>Electricity Bill Calculation</h3>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
        Enter the units (kws) : <br><br><input type="text" name="units" ><br><br>
        <input type="submit"name="calc">
    </form>
    <br>
    <?php
    $amt=" ";
    if (isset($_POST['calc'])) {
        $n=(int)$_POST['units'];
        if (empty($n)){
            echo "Enter the Values";
        } elseif ($n<0) {
            echo "Negative values are not alloweed";
        } else { 
            if ($n<=100) {
                echo "you have consumed only $n units which comes under free of cost";
            } elseif ($n>100&&$n<=500) {
                if ($n<=200) {
                    $n1=$n-100;
                    $amt=$n1*2.25;
                } elseif ($n>200 && $n<=400) {
                    $n2=$n-200;
                    $amt=(100*2.25)+($n2*4.5);
                } else {
                    $n3=$n-400;
                    $amt=(100*2.25)+(200*4.5)+($n3*6);
                }
            } else {
                if ($n<=600) {
                    $n1=$n-500;
                    $amt=(300*4.5)+(100*6)+($n1*8);
                } elseif ($n<=800) {
                    $n2=$n-600;
                    $amt=(300*4.5)+(100*6)+(100*8)+($n2*9);
                } elseif ($n<=1000) {
                    $n3=$n-800;
                    $amt=(300*4.5)+(100*6)+(100*8)+(200*9)+($n3*10);
                }else{
                    $n4=$n-1000;
                    $amt=(300*4.5)+(100*6)+(100*8)+(200*9)+(200*10)+($n4*11);
                }
            }
        } 
        echo $amt;   
    }
        

    ?>
</body>
</html>
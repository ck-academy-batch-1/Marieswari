<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destructor</title>
</head>
<body>
<?php
        echo "<h3>DESTRUCTOR</h3>";
        class dress
        {
            public $d_name;
            public $d_discount;
            function __construct($d_name,$d_discount)
            {
                $this->d_name=$d_name;
                $this->d_discount=$d_discount;
            }
            function __destruct()
            {
                echo "<br><br>Discount for $this->d_name is $this->d_discount% ";
            }
        }
        $dress_1=new dress('saree',20);
        $dress_2=new dress('saree',30);

        echo "Note : Destructor executes at the end ";
    ?>
</body>
</html>
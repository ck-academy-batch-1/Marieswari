<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time</title>
    <style>
        h2{
            text-align:center;
            font-variant:small-caps;
            font-style:oblique;
        }
        h4{
            font-variant:small-caps;
            font-style:oblique;
        }

    </style>
</head>
<body>
    <h2>Date and Time Formats</h2>  
    <br>
    <hr>
    
    <h4>Day:</h4>
    <?php
        echo "Today is " . date("l"). "<br>" ;
    ?>
    <br>
    <hr>
    <h4>Date:</h4>
    <?php
        echo "Today is " . date("Y/m/d") . "<br>". "<br>";
        echo "Today is " . date("m-Y-d") . "<br>". "<br>";
        echo "Today is " . date("m.d.Y") . "<br>". "<br>";
    ?>
    <br>
    <hr>
    <h4>Indian Time Zone:</h4>
    <?php
        date_default_timezone_set("Asia/Kolkata");
        echo "The time is " . date("H:i:sa")."<br>". "<br>";
        echo "The time is " . date("h:i:sa"). "<br>";
    ?>
    <br>
    <hr>
    <h4>Make Time:</h4>
    <?php
        $m=mktime(10, 32, 24, 3, 3, 1998);
        echo "Created date is " . date("Y-m-d h:i:sa", $m);
    ?>
    <br>
    <hr>
    <h4>String to Time:</h4>
    <?php
        $m1=strtotime("10:32am Feb 8 2002");
        echo "Created date is " . date("Y-m-d H:i:sa", $m1);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>
<body>
    <?php
        echo "<h3>CONSTRUCTOR </h3>";
        class SmartPhones{
            public $mBrand;
            public $mBatteryBackup;
            function __construct($Brand,$BatteryLife){
                $this->mbrand=$Brand;
                $this->mBatteryBackup=$BatteryLife;
            }
        }
        $brand1=new SmartPhones('oppo',10);
        echo "<br>"."Mobile Brand :  ".$brand1->mbrand;
        echo "<br>"."Battery Life :  ".$brand1->mBatteryBackup."hrs";
        echo "<br>";
        $brand2=new SmartPhones('vivo',12);
        echo "<br>"."Mobile Brand :  ".$brand2->mbrand;
        echo "<br>"."Battery Life :  ".$brand2->mBatteryBackup."hrs";
    ?>
</body>
</html>
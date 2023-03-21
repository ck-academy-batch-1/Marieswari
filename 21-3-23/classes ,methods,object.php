<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3>CLASS , METHODS AND OBJECTS </h3>";
        class electronicItems{
            public $device;
            public $count;
            function device($devices){
                $this->device=$devices;
            }
            function count($count){
                $this->count=$count;
            }
            function getEitems(){
                return "Product Name : $this->device <br>";
            }
            function getEitemsCount(){
                return "Available No's : $this->count";
            }
        }
        $item1=new electronicItems();
        $item1->device('Desktop');
        $item1->count(3);
        echo $item1->getEitems();
        echo $item1->getEitemsCount();
        echo "<br>"."<br>";
        $item2=new electronicItems();
        $item2->device('Smart Phones');
        $item2->count(13);
        echo $item2->getEitems();
        echo $item2->getEitemsCount();
    ?>
</body>
</html>
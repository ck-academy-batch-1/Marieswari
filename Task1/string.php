<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying a  string</title>
</head>
<body>
    <h2>Displaying a  string</h2>
    <?php
    class str{
        public function __construct($s){
            $this->srt=$s;
        } 
    }
    $str=new str("name");
    echo $str->srt;
    ?>
    <br><br>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
        Enter the String : <input type="text" name="value" >
        <br>
        <input type="submit">
    </form>
    <br>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        class str1{
            
            function __construct($val){
                $this->val=$val;
            }
        }
        $val=$_POST['value'];
        $obj=new str1($val);
        echo $obj->val;
    }
    ?>
</body>
</html>
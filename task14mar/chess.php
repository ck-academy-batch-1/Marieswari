<!DOCTYPE html>
<html>
    <head>
        <title>Chess Board</title>
        <style>
            
            h1{
                text-align:center;
                font-variant:small-caps;
                margin-top:2vw;
                margin-bottom:2vw;
            }
            table{
                width : 300px;
                height : 300px;
                margin-left : auto;
                margin-right : auto;
                border : 1px outset black;
            }
        </style>
    </head>
    <body>
        <h1>Chess Board</h1>
        <table cellspacing="0px"> 
            <?php
                $a=1;
                while ($a <= 8) {
                    echo "<tr>";
                    $c=$a;
                    $b=1;
                    while ($b<=8) {
                        if ($c%2 == 0) {
                            echo "<td  bgcolor='black'></td>";
                            $c++;
                        } else {
                            echo "<td ></td>";
                            $c++;
                        }
                        $b++;
                    }
                    echo "<tr>";
                    $a++;
                }
            ?>
        </table>
    </body>
</html>

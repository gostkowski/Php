<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $DEBUG = 1;
        function helloFunctionWorld(){
            if ($DEBUG){
                echo "Debugg mode is on";
            }
            $internalVar = 99;
            echo "hello function world there <br>";
            echo "The value of the internal varible is: $internalVar <br>";
        }

        echo "call the hfw function twice <br>";
        helloFunctionWorld();

        echo "call the hfw function third <br>";
        helloFunctionWorld();
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $DEBUG = 1;
        $counterArray = array(0,1,2,3,4,5,6,7,8,9);
        foreach($counterArray as $num){
            echo "This is the value the element in the array: $num <br>";
        }

        echo "<br>--------<br><br>";

        if ($DEBUG){
            echo "Dump array elements of counterArray usring print_r.";
            print_r($counterArray);

        }
        echo "<br>--------<br><br>";

        $keyArray = array("Star" => "Sky", "Bob" => "Fish", "Crab" => "Grass");
        echo "The value associated with key Star is:" . $keyArray["Star"] ;

        echo "<br>--------<br><br>";

        foreach($keyArray as $key){
            echo "<br> $key";
        }
        
        echo "<br>--------<br><br>";
        print_r($keyArray);
    ?>
</body>
</html>


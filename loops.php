<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IntroPHP</title>
</head>
<body> 
    <?php  // The tag that begins the PHP code section
        $counter = 0;
        while ($counter < 10){
            echo "Here is the counter displayed in the while loop at: $counter";
            echo "<br>";
            $counter++;
        }

        echo "<br>";

        for ($anothercounter = 0; $anothercounter < 10; $anothercounter++){

            echo "Here is the counter value displayed in the for loop: $anothercounter";
            echo "<br>"; 

        }

        echo "<br>";

        $counterArray = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

        foreach($counterArray as $counter){
            echo "Here is the counter value in the foreach loop: $counter";
            echo "<br>";
        }
	?>  
</body>
</html>
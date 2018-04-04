<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IntroPHP</title>
</head>
<body> 
    <?php  // The tag that begins the PHP code section
        for ($i = 0; $i < 9 ; $i++) {
            if ($i == 4){
                break;
            }
            echo "This is the printout when i = $i <br>";
        }

        for ($i = 10; $i < 90 ; $i = $i + 10) {
            if ($i == 40){
                continue;
            }
            echo "This is the printout when i = $i <br>";
        }

        for ($i = 1; $i < 9 ; $i = $i + 1) {
            $multi = $i * $i;
            echo "This is the n*n printout when i = $i, and n*n= $multi <br>";
        }

        phpinfo();

	?>  
</body>
</html>
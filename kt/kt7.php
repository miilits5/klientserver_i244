<!doctype html>

<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Kodutöö nr7</title>
  <meta name="description" content="Tarvi Kodutööd">
  <meta name="author" content="Tarvi Tihhanov">

</head>

<body >
<?php 
    
    function peeglis ($string){
        
        echo "$string <br><br>";
        
        for ($i = strlen($string)-1; $i >= 0; $i--){
            
            echo substr($string, $i, 1);
             }
                
    }
    
    peeglis("Korras nagu norras");
    
 ?>
</body>
</html>
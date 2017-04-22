<!doctype html>

<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Kodutöö nr8</title>
  <meta name="description" content="Tarvi Kodutööd">
  <meta name="author" content="Tarvi Tihhanov">
<link rel="stylesheet" href="../css/kt8.css">
</head>

<body>
<p id="valjund">
                  
<?php  
function tekstBoks(){  
     if (isset($_GET['auktekstile']) && $_GET['auktekstile']!="") {
        echo htmlspecialchars ($_GET['auktekstile']);}      
      }
tekstBoks();          
?>
</p>   

<p>    
<form action="kt8.php" method="get" id="vorm">
    <textarea name="auktekstile"  form="vorm" placeholder="Trüki siia"></textarea><br>
    <input type="color" name="taustav2rv" value="#36040E"> Taustavärvus<br>
    <input type="color" name="tekstiv2rv" value="#15DFD6"> Tekstivärvus<br>
</p>   
 
<p>
<b>Piirjoon: </b><br>
                <select name="piirjoon" form="vorm"> 
                    <option value="0px">0</option>
                    <option value="1px">1</option>
                    <option value="2px">2</option>
                    <option value="5px">5</option>
                    <option value="10px">10</option>
                </select> Piirjoone laius<br>
                
                <select name="piirstiil" form="vorm">
                    <option value="dashed">Dashed</option>
                    <option value="double">Double</option>
                    <option value="groove">Groove</option>
                    <option value="hidden">Hidden</option>
                    <option value="ridge">Ridge</option>
                    <option value="solid">Solid</option>
                </select>
                    
    <input type="color" name="piirv2rv" value="#11FA06"> Piirjoone värvus<br>
    <input type="number" name="piirnurk" min="0" max="100" step="1"> Piirjoone nurga raadius (0-100px)<br>
    <input type="submit" value="Esita">
                      
</p>
</form> 
        
    
</body>
</html>
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
        
     
            $kassid = array (
            
            array ("tõug" => 'Inglise lühikarvaline', 'suurus' => 'suur', 'värv'=>'sinine', 'pilt'=> '<img src="../pic/ingliselyh.jpg">'),
            array ('tõug' => 'Egiptuse Mau', 'suurus' => 'suur', 'värv'=>'täpiline', 'pilt'=>'<img src="../pic/mau.jpg">'),
            array ('tõug' =>'Scotish Straight', 'suurus' =>'keskmine', 'värv'=>'marmor', 'pilt'=>'<img src="../pic/straigth.jpg">'),
            array ('tõug' =>'Scotish Fold', 'suurus' => 'keskmine', 'värv' =>'must', 'pilt'=>'<img src= "../pic/fold.jpg">')
                );
            
            foreach($kassid as $value){
              include ('include.html');
            }      
?>
    
    
</body>
</html>
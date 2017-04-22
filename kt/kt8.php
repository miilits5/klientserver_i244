<?php
$text_bg="#fff";
if (isset($_POST['taustav2rv'])) 
    $text_bg = htmlspecialchars($_POST['taustav2rv']); 

$text_color="#fff";
if (isset($_POST['tekstiv2rv'])) 
    $text_color = htmlspecialchars($_POST['tekstiv2rv']); 

$border_width =2;
if (isset($_POST['piirjoon']) ) 
    $border_width = htmlspecialchars($_POST['piirjoon']); 
$border_style =" solid ";
if (isset($_POST['piirstiil']) ) 
    $border_style = htmlspecialchars($_POST['piirstiil']); 
$border_color =" black ";
if (isset($_POST['piirv2rv']) ) 
    $border_color = htmlspecialchars($_POST['piirv2rv']); 
$border=$border_color." ".$border_style." ".$border_width; 

$border_radius =10;
if (isset($_POST['piirnurk']) ) 
    $border_radius = htmlspecialchars($_POST['piirnurk']);

?>



<!doctype html>

<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Kodutöö nr8</title>
  <meta name="description" content="Tarvi Kodutööd">
  <meta name="author" content="Tarvi Tihhanov">
<style>

       form {
            
            border-style: groove;
            border-radius: 3px;
            clear: both;
            padding: 10px;
            margin-left: 400px;
            margin-right: 400px;
            font-family:monospace;
            }
    
        input, select{
            
            margin-bottom: 20px;
        }
        
        input[type=submit]{
            
            
        }

        #valjund {
            
            padding: 10px;
            background: <?php echo $text_bg; ?>;
            color: <?php echo $text_color; ?>;
            border: <?php echo $border; ?>px;
            border-radius: <?php echo $border_radius; ?>px;
            max-width: 350px;
            min-height: 150px;

    display: block;
    margin-left: auto;
    margin-right: auto;

        }
    
</style>
</head>

<body>
<?php 

    $stiilid=array("solid", "dashed", "dotted", "none", "double", "hidden", "ridge");

    ?>
<div id="valjund"> <?php if (isset($_POST['valjund'])) echo htmlspecialchars($_POST['valjund']); ?></div>
<hr/>     
<p>
   <form method="POST" action="kt8.php" method="get" id="vorm">
        <textarea name="valjund" form="vorm" placeholder="Siia kirjuta kommentaar"></textarea>
        <br/>
        <input type="color" name="taustav2rv" id="taustav2rv" value="#FF2102"> 
        <label for="taustav2rv">Taustavärvus</label>
        <br/>
        <input type="color" name="tekstiv2rv" id="tekstiv2rv" value="#0DFF02"> 
        <label for="tekstiv2rv">Tekstivärvus</label>
        <br/>
        <fieldset>
            <legend>Piirjoon</legend>
            <input type="number" min="0" max="50" step="1" name="piirjoon" id="piirjoon" form="vorm" >
            <label>Piirjoone laius (0-50px)</label>
            <br/>
            <select name="piirstiil">
                <?php foreach($stiilid as $stiil):?>
                    <option><?php echo $stiil; ?></option>
                <?php endforeach; ?>
            </select>
            <br/>
            <input type="color" name="piirv2rv" id="piirv2rv" form="vorm"> 
            <label for="piirv2rv">Piirjoone värvus</label>
            <br/>
            <input type="number" min="0" max="100" step="1" name="piirnurk" id="piirnurk" >
            <label>Piirjoone nurga raadius (0-100px)</label>
            <br/>
        </fieldset>
        <input type="submit" value="esita" />
    </form>
 </p>      
    
</body>
</html>
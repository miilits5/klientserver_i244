<?php
$text_bg="#fff";
if (isset($_GET['taustav2rv'])) 
    $text_bg = htmlspecialchars($_GET['taustav2rv']); 

$text_color="#fff";
if (isset($_GET['tekstiv2rv'])) 
    $text_color = htmlspecialchars($_GET['tekstiv2rv']); 

$border_width =2;
if (isset($_GET['piirjoon']) ) 
    $border_width = htmlspecialchars($_GET['piirjoon']); 
$border_style =" solid ";
if (isset($_GET['piirstiil']) ) 
    $border_style = htmlspecialchars($_GET['piirstiil']); 
$border_color =" black ";
if (isset($_GET['piirv2rv']) ) 
    $border_color = htmlspecialchars($_GET['piirv2rv']); 
$border=$border_color." ".$border_style." ".$border_width; 

$border_radius =10;
if (isset($_GET['piirnurk']) ) 
    $border_radius = htmlspecialchars($_GET['piirnurk']);

?>


<!doctype html>

<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Kodutöö nr10</title>
  <meta name="description" content="Tarvi Kodutööd">
  <meta name="author" content="Tarvi TIhhanov">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

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
            background-color: <?php echo $_GET["taustav2rv"]; ?>;
            padding: 10px;
            background: <?php echo $text_bg; ?>;
            color: <?php echo $text_color; ?>;
            border: <?php echo $border; ?>px;
            border-radius: <?php echo $border_radius; ?>px;
            max-width: 450px;
            min-height: 250px;

    display: block;
    margin-left: auto;
    margin-right: auto;

        }
		textarea {
  width: 300px;
  height: 150px;
}
    
</style>

</head>

<body>
<h1>KODUTÖÖ nr10</h1>
<?php 

    $stiilid=array("solid", "dashed", "dotted", "none", "double", "hidden", "ridge");
error_reporting(E_ALL ^ E_NOTICE);
    ?>
<div id="valjund">
<?php
 function tekstTere(){
 if (isset($_GET['tekstivali']) && $_GET['tekstivali']!="") {
        echo htmlspecialchars ($_GET['tekstivali']);}
 }
tekstTere(); 
?>
</div>
<hr/>     
<p>
   <form method="get" action="kt11.php" method="get" id="vorm">
        <textarea name="tekstivali" form="vorm" placeholder="Siia kirjuta kommentaar..."> <?php if(!empty($_GET["tekstivali"])) echo htmlspecialchars($_GET["tekstivali"]) ;?></textarea>
        <br/>
        <input type="color" name="taustav2rv" <?php if(!empty($_GET["taustavarv"])) echo "value=\"{$_GET["taustavarv"]}\""; ?>>Taustavärv <br> 
        <label for="taustav2rv">Taustavärv</label>
        <br/>
        <input type="color" name="tekstiv2rv" <?php if(!empty($_GET["tekstivarv"])) echo "value=\"{$_GET["tekstivarv"]}\""; ?>>Tekstivärv<br>		
        <label for="tekstiv2rv">Tekstivärvus</label>
        <br/>
		</p>
        <fieldset>
            <legend>Piirjoon</legend><br>
                  <select name="piirjoon" form="vorm"> 



                    <option <?php if(!empty($_GET["piirjoon"]) && $_GET["piirjoon"]=="1") echo "selected"; ?>>1</option>
					<option <?php if(!empty($_GET["piirjoon"]) && $_GET["piirjoon"]=="2") echo "selected"; ?>>2</option>
					<option <?php if(!empty($_GET["piirjoon"]) && $_GET["piirjoon"]=="3") echo "selected"; ?>>3</option>
					<option <?php if(!empty($_GET["piirjoon"]) && $_GET["piirjoon"]=="4") echo "selected"; ?>>4</option>
                    <option <?php if(!empty($_GET["piirjoon"]) && $_GET["piirjoon"]=="5") echo "selected"; ?>>5</option>
                    <option <?php if(!empty($_GET["piirjoon"]) && $_GET["piirjoon"]=="10") echo "selected"; ?>>10</option>
                    <option <?php if(!empty($_GET["piirjoon"]) && $_GET["piirjoon"]=="25") echo "selected"; ?>>25</option>
                    <option <?php if(!empty($_GET["piirjoon"]) && $_GET["piirjoon"]=="50") echo "selected"; ?>>50</option>
                    <option <?php if(!empty($_GET["piirjoon"]) && $_GET["piirjoon"]=="100") echo "selected"; ?>>100</option>
    </select> Piirjoone laius<br>
            <br/>
			
                <select name="piirstiil" form="vorm">
                    <option value="dashed" <?php if(!empty($_GET["piirstiil"]) && $_GET["piirstiil"]=="dashed") echo "selected"; ?>>Dashed</option>
                    <option value="dotted" <?php if(!empty($_GET["piirstiil"]) && $_GET["piirstiil"]=="dotted") echo "selected"; ?>>Dotted</option>
                    <option value="double" <?php if(!empty($_GET["piirstiil"]) && $_GET["piirstiil"]=="double") echo "selected"; ?>>Double</option>
                    <option value="groove" <?php if(!empty($_GET["piirstiil"]) && $_GET["piirstiil"]=="groove") echo "selected"; ?>>Groove</option>
                    <option value="ridge" <?php if(!empty($_GET["piirstiil"]) && $_GET["piirstiil"]=="ridge") echo "selected"; ?>>Ridge</option>
                    <option value="solid" <?php if(!empty($_GET["piirstiil"]) && $_GET["piirstiil"]=="solid") echo "selected"; ?>>Solid</option>
                </select> Piirjoone stiil<br>
			
            <br/>
            <input type="color" name="piirv2rv" <?php if(!empty($_GET["piirv2rv"])) echo "value=\"{$_GET["piirv2rv"]}\""; ?>> 
            <label for="piirv2rv">Piirjoone värvus</label>
            <br/>
            <input type="number" min="0" max="100" step="1" <?php if(!empty($_GET["piirnurk"]) && is_numeric($_GET["piirnurk"])) echo "value=\"".htmlspecialchars($_GET["piirnurk"])."\" "; ?>>
            <label>Piirjoone nurga raadius (0-100px)</label>
            <br/>
        </fieldset>
        <input type="submit" value="esita" />
    </form>
 </p>      
    
</body>
</html>


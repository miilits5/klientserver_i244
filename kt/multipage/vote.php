<?php 
require_once('head.html');
?>
<div id="wrap">
	<h3>Vali lemmar pilt</h3>
	<form action="tulemus.php" method="GET">
		
<?php
$pildid = range(1,6);
	foreach($pildid as $value){
		echo "<p>
		<label for='p$value'>
				<img src='pildid/nameless$value.jpg' alt='nimetu $value' height='75'/>
				</label>
				<input type='radio' value='$value' id='p$value' name='pilt'/>
			</p>";
	}
?>
		
		<br/>
		<input type="submit" value="Valin!"/>
	</form>

</div>
<?php
require_once('foot.html');
?>
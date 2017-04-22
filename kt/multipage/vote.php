<?php 
require_once('head.html');
?>
<div id="wrap">
	<h3>Vali oma lemmik :)</h3>
	<form action="tulemus.php" method="GET">
		<p>
<?php
$pildid = range(1,6);
	foreach($pildid as $value){
		echo "<p>
		<label for='p$value'>
				<img src='pildid/nameless$value.jpg' alt='nimetu $value' height='50'/>
				</label>
				<input type='radio' value='$value' id='p$value' name='pilt'/>
			</p>";
	}
?>
		</p>
		<br/>
		<input type="submit" value="Valin!"/>
	</form>

</div>
<?php
require_once('foot.html');
?>
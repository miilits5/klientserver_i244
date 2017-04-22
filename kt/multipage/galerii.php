<?php 
require_once('head.html');
?>
<div id="wrap">
	<h3>Fotod</h3>
	<div id="gallery">
		<?php 
		foreach ($pildid as $value){
		echo "<img src='pildid/nameless$value.jpg' alt='nimetu $value.'>";
		
		}
		?>
	</div>
</div>
<?php
require_once('foot.html');
?>
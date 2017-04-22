<?php 
require_once('head.html');
?>
<div id="wrap">
	<h3>Valiku tulemus</h3>
	<p>
<?php
if (!empty($_GET)){ 
	echo "Valik saadetud!";
	} else {
		echo "Palun vali mõni pilt ka ikka enne kui hääled saadad";
	}
?>
</p>

</div>
<?php
require_once('foot.html');
?>
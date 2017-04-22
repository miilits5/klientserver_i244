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
		echo "Valik on pooleli!";
	}
?>
</p>

</div>
<?php
require_once('foot.html');
?>
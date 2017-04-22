<?php 
require_once('head.html');

$nr = range (1,6);
$pildid = array();
foreach ($nr as $value){
	$pildid[] = ("<img src='pildid/nameless$value.jpg' alt='nimetu $value' />"); 
}
$leht = "";
if (!empty($_GET["leht"])){
	$leht = $_GET["leht"];
}
switch($leht){
	case "galerii":
		include("galerii.html");
	break;
	case "vote":
		include("vote.html");
	break;
	case "tulemus":
		include("tulemus.html");
	break;
	default:
		include("pealeht.html");
	break;
}
require_once('foot.html');
?>
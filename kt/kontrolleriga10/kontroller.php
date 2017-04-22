<?php 
require_once('head.html');
?>
<?php
$expire=10*60; // aegumise aeg sekundites
// sessiooni aegumine serveris
ini_set('session.gc-maxlifetime', $expire);
// alusta uus või jätka vana sessiooni
session_start(); 
// viimase päringu aja kontroll aegumise jaoks
if (isset($_SESSION['LAST_ACTIVITY']) && 
	(time()-$_SESSION['LAST_ACTIVITY'] > $expire))
{ 
	tapa_sessioon();  // kustuta sessioon 
	session_start();  // alusta uut sessiooni 
}
// säti uus viimase päringu aeg
$_SESSION['LAST_ACTIVITY'] = time();
 ?>
<?php 
$nr = range (1,6);
$pildid = array();
foreach ($nr as $value){
	$pildid[] = ("<img src='pildid/nameless$value.jpg' alt='nimetu $value' />"); 
}
$page = "";
if (!empty($_GET["page"])){
	$page = $_GET["page"];
}
switch($page){
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
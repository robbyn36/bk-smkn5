<?php
if ($_GET["go"] == "home"){
	include 'home.php';
}else if ($_GET["go"] == "action"){
	include 'action.php';
}
?>
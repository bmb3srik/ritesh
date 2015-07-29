<?php
	session_start();
	$session_lang = $_SESSION["EDAA_LANG_SHORT"];
    include("./includes/session_destroy.inc.php");
    $_SESSION["EDAA_LANG_SHORT"] = $session_lang;
	$came_from=isSet($_GET['came_from']) ? $_GET['came_from'] : '';
	$came_from=str_replace('show=on','show=off',$came_from);
	$came_from=htmlspecialchars($came_from, ENT_QUOTES);
	if ($came_from=='')
	{	
		header('Location: /dental/');
		exit();
	}
	else
	{
		header('Location: ' . $came_from);
		exit();
	}
?>
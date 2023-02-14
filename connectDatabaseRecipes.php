<?php 

try
{
	$db = new PDO('mysql:host=sql202.epizy.com;dbname=epiz_33409722_recipes;charset=utf8', '******', '*****');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

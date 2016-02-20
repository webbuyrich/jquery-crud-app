<?php 

$dbc = 'mysql:host=localhost; dbname=jquery_crud; charset=utf8';
$db_user =	"richard";
$db_pass =  "richard";

try{
	$db_con = new PDO($dbc, $db_user, $db_pass);	
}
catch(PDOException $e){
	echo $e->getMessage();
}

















?>
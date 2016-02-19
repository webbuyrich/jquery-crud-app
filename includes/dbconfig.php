<?php 

$db_host = "localost";
$db_name = "jquery_crud";
$db_user =	"richard";
$db_pass =  "richard";

try{
	$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
	$db_con->setAttribute(PDO::ATTR_ERROMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
}

















?>
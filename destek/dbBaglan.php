<?php

try{
 $db = new PDO("mysql:host=192.168.2.2;charset=utf8;dbname=linkhavu_link", "linkhavu_root", "Kadir123456");

 
}
 catch (Exception $ex){
     echo $ex->getMessage();
 }
function go ($url, $time = 1){
	if ($time) header("Refresh: {$time}; url={$url}");
	else header("Location: {$url}");
}


function uyeduyuru (){
	try{
	$db = new PDO("mysql:host=192.168.2.2;charset=utf8;dbname=linkhavu_link", "linkhavu_root", "Kadir123456");
	$query = $db->query("SELECT * FROM tblduyuru duyuruId=1");
	if($query){
		foreach($query as $duyuru){
			
		}
	}
	}
	catch (Exception $ex){
		echo $ex;
	}
}
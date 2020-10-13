<?php

require_once("../../dbBaglan.php");
$id = $_GET['id'];
$query = $db->query("Delete from tbldestek where destekId=$id");
if($query){
	echo "Destek Mesajý Silindi";
	go("../destekler.php");
}


?>
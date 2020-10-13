<?php

require_once("../../dbBaglan.php");
$id = $_GET['id'];
$query = $db->query("Update tblbildirim set durum=1 where bildirimId=$id");
if($query){
	echo "Onay Verildi";
	go("../bildirimler.php");
}


?>
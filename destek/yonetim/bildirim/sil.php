<?php

require_once("../../dbBaglan.php");
$id = $_GET['id'];
$query = $db->query("Delete from tblbildirim where bildirimId=$id");
if($query){
	echo "Bildirim Silindi";
	go("../bildirimler.php");
}


?>
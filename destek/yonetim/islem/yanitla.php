<?php
session_start();

$cevap = $_POST['txtMesaj'];
$destekKodu = $_POST['txtKod'];
$uyeId = $_POST['txtUyeId'];
require_once("../../dbBaglan.php");
$query=$db->query("insert into tblmesaj (mesajId,mesaj,cevap,uyeId,takipKodu) values (0,' ','$cevap',$uyeId,'$destekKodu')");
if($query){
	$query = $db->query("Update tbldestek set durum=1 where destekKodu='$destekKodu'");
	if($query){
		echo "Cevap iletildi.";
	go($_SERVER['HTTP_REFERER']);
	}
}
else{
	echo "Bir Sorun Oluþtu";
	go($_SERVER['HTTP_REFERER']);
}


?> 
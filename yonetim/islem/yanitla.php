<?php
session_start();
$admin = $_SESSION['admin'];
if($_SESSION['admin']){
$ihbarSonucu = $_POST['txtYanit'];
$ihbarciEmail = $_POST['txtEmail'];
require_once("../../dbBaglan.php");
$query=$db->query("Update tblihbar set ihbarSonucu='$ihbarSonucu' where ihbarciEmail='$ihbarciEmail'");
if($query){
	echo "Cevap iletildi.";
	go("../ihbar.php");
}
else{
	echo "Bir Sorun Oluþtu";
	go("../ihbar.php");
}
}
else{
	echo "Lütfen Giriþ Yap";
}

?> 
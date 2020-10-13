<?php
session_start();
$admin = $_SESSION['admin'];
if($_SESSION['admin']){
$duyuruYazi = @$_POST['txtYazi'];
$duyuruYazar = @$_POST['txtYazar'];
require_once("../../dbBaglan.php");
$query = $db->query("Insert into tblduyuru (duyuruId,duyuruYazi,duyuruYazar,anaDuyuru) values (0,'$duyuruYazi','$duyuruYazar',0)");
if($query){
	echo "Duyuru Eklendi";
	go("../duyuru.php");
}
else{
	echo "SQL Sorgusunda Hata Oluþtu";
	go("../duyuru.php");
}

}
else{
	echo "Lütfen Giriþ Yap";
	go("../login.php");
}
?> 
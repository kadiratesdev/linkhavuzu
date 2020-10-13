<?php
session_start();
$admin = $_SESSION['admin'];
if($_SESSION['admin']){
$kodYazi= @$_POST['txtYazi'];
$kodDegeri = @$_POST['txtDeger'];
require_once("../../dbBaglan.php");
$query = $db->query("Insert into tblkredikod (kodId,kodYazi,kodKredi) values (0,'$kodYazi',$kodDegeri)");
if($query){
	echo "Promosyon Kodu Eklendi";
	go("../promosyon.php");
}


$islem= @$_GET['islem'];

if($islem==1){
	$kodId= @$_GET['id'];
	require_once("../../dbBaglan.php");
$query = $db->query("DELETE FROM tblkredikod where kodId=$kodId");
if($query){
	echo "Promosyon Kodu Silindi";
	go("../promosyon.php");
}
else{
	echo "SQL Sorgusunda Hata Oluþtu";
	go("../promosyon.php");
}
	
}


}
else{
	echo "Lütfen Giriþ Yap";
	go("../login.php");
}


?> 
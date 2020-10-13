<?php
session_start();
$admin = $_SESSION['admin'];
if($_SESSION['admin']){
$islem = $_GET['islem'];
if($islem==1){
$duyuruId = $_GET['id'];
require_once("../../dbBaglan.php");
$query=$db->query("DELETE FROM tblduyuru where duyuruId=$duyuruId");
if($query){

	echo "Duyuru Silindi";
	go("../duyuru.php");
}
else{
	echo "SQL Sorgunda Hata Olustu";
	go("../duyuru.php");
}
}




if($islem==2){
	
$duyuruId = $_GET['id'];	
require_once("../../dbBaglan.php");
$query=$db->query("Update tblduyuru set anaDuyuru=0 where anaDuyuru=1");
if($query){
$query = $db->query("Update tblduyuru set anaDuyuru=1 where duyuruId=$duyuruId");
if($query){
	echo "Duyuru Ana Duyuru Olarak Isaretlendi";
	go("../duyuru.php");
}
else{
	echo "SQL Kodunda Bir Sorun Oluştu";
}
}
}
else "Geçersiz İşlem Denemesi";
}
else{
	echo "Lütfen Giriş Yap";
}
?> 
<?php
session_start();
$admin = $_SESSION['admin'];
if($_SESSION['admin']){
$islem = $_GET['islem'];
if($islem==1){
$uyeId = $_GET['id'];
$kredi = $_GET['kredi'];
require_once("../../dbBaglan.php");
$query=$db->query("SELECT * FROM tbluye where uyeId=$uyeId");
if($query){
	foreach($query as $uye){
		$uyeKredi = $uye['uyeKredi'];
		$uyeKredi = $uyeKredi + $kredi;
		$query = $db->query("Update tbluye set uyeKredi=$uyeKredi where uyeId=$uyeId");
		if($query){
			echo "Uyeye 50 Kredi Verildi";
			go("../kredi.php");
		}
		else{
			echo "SQL Sorgusunda Hata Olustu";
		}
	}
	
}
}




if($islem==2){
	$uyeId = $_GET['id'];
$kredi = $_GET['kredi'];
require_once("../../dbBaglan.php");
$query=$db->query("SELECT * FROM tbluye where uyeId=$uyeId");
if($query){
	foreach($query as $uye){
		$uyeKredi = $uye['uyeKredi'];
		$uyeKredi = $uyeKredi- $kredi;
		$query = $db->query("Update tbluye set uyeKredi=$uyeKredi where uyeId=$uyeId");
		if($query){
			echo "Uyenin 50 Kredisi Alindi";
			go("../kredi.php");
		}
		else{
			echo "SQL Sorgusunda Hata Olustu";
		}
	}
}
}
else "Geçersiz Ýþlem Denemesi";
}
else{
	echo "Lütfen Giriþ Yap";
}
?> 
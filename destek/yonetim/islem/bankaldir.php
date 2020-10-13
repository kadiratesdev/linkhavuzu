<?php
session_start();
$admin = $_SESSION['admin'];
require_once("../../dbBaglan.php");
if($_SESSION['admin']){
$id=@$_GET['id'];

$query=$db->query("Update tbluye set aktivasyon=1 where uyeId=$id");
if($query){
	echo "Hesap Aktiflestirildi.";
	go("../uye.php");
}
else{
	echo "Bir Sorun Oluþtu";
	go("../uye.php");
}
}
else{
	echo "Lütfen Giriþ Yap";
	go("../login.php");
}

?> 
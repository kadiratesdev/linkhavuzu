<?php
session_start();
$admin = $_SESSION['admin'];
if($_SESSION['admin']){
$id=$_GET['id'];
require_once("../../dbBaglan.php");
$query=$db->query("DELETE from tbluye  where uyeId=$id");
if($query){
	echo "Hesap Silindi";
	go("../uye.php");
}
else{
	echo "Bir Sorun Oluþtu";
	go("../uye.php");
}
}
else{
	echo "Lütfen Giriþ Yap";
}

?> 
<?php
session_start();
$admin = $_SESSION['admin'];
if($_SESSION['admin']){
$id=$_GET['id'];
require_once("../../dbBaglan.php");
$query=$db->query("DELETE from tblihbar  where ihbarId=$id");
if($query){
	echo "Ihbar Silindi";
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
<?php
session_start();
$admin = $_SESSION['admin'];
if($_SESSION['admin']){
$id=$_GET['id'];
require_once("../../dbBaglan.php");
$query=$db->query("DELETE from tblreklam  where reklamId=$id");
if($query){
	echo "Reklam Silindi";
	go("../reklam.php");
}
else{
	echo "Bir Sorun Oluþtu";
	go("../reklam.php");
}
}
else{
	echo "Lütfen Giriþ Yap";
}

?> 
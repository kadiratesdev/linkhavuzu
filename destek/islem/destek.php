<?php
session_start();
$oturum = $_SESSION['oturum'];
require '../dbBaglan.php';

if($oturum){
   $adiSoyadi = $_POST['txtAdiSoyadi'];
   $konu = $_POST['txtKonu'];
   $telefon  = $_POST['txtTelefon'];
   $mesaj = $_POST['txtMesaj'];
   $uyeId = $_SESSION['uyeId'];
   $destekKodu = $_POST['txtKod'];
   $tarih = date("d-m-y");
$query= $db->query("insert into tbldestek (destekId,uyeId,adiSoyadi,konu,tarih,durum,cevap,mesaj,telefon,destekKodu) values (0,$uyeId,'$adiSoyadi','$konu','$tarih',0,' ','$mesaj','$telefon','$destekKodu')");

if($query){

$query = $db->query("insert into tblmesaj (mesajId,mesaj,cevap,uyeId,takipKodu) values (0,'$mesaj',' ',$uyeId,'$destekKodu')");
if($query){
  echo '<script>alert("Destek Bildiriminiz Olusturuldu Lutfen Sabirli Olunuz.")';
 go("../destek.php");
}
}
}
else{
    echo '<script>alert("Lütfen Giriş Yap");</script>';
    go("../../login.php");
}


?>
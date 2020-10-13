<?php
session_start();
$oturum = $_SESSION['oturum'];
require '../dbBaglan.php';

if($oturum){
    $uyeId = $_SESSION['uyeId'];
    $kulAdi = $_POST['txtKulAdi'];
  $yontem = $_POST['txtYontem'];
  $adiSoyadi = $_POST['txtAdiSoyadi'];
  $tarih = $_POST['txtTarih'];
  $telefon = $_POST['txtTelefon'];
  $paket = $_POST['txtPaket'];
  $mesaj  = $_POST['txtMesaj'];
  $fiyat = $_POST['txtMiktar'];
$query= $db->query("insert into tblbildirim (bildirimId,uyeId,paketAdi,fiyat,tarih,durum,kulAdi,yontem,adiSoyadi,telefon,mesaj) values (0,$uyeId,'$paket','$fiyat','$tarih',0,'$kulAdi','$yontem','$adiSoyadi','$telefon','$mesaj')");

if($query){
     echo '<script>alert("Bildiriminiz Basariyla Yapildi Ekiplerimiz Kontrol Ettikten Sonra Kredileriniz Hesabınıza Eklenecektir.");</script>';
    go("../bildirim.php");
}
}
else{
    echo '<script>alert("Lütfen Giriş Yap");</script>';
    go("../../login.php");
}


?>
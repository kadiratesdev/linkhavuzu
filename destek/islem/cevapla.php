<?php
session_start();
$oturum = $_SESSION['oturum'];
require '../dbBaglan.php';

if($oturum){
  $mesaj = $_POST['txtMesaj'];
  $uyeId = $_SESSION['uyeId'];
  $takipKodu = $_POST['txtKod'];
  
$query= $db->query("insert into tblmesaj (mesajId,mesaj,cevap,uyeId,takipKodu) values (0,'$mesaj',' ',$uyeId,'$takipKodu')");

if($query){

$query = $db->query("Update tbldestek set durum=0 where destekKodu='$takipKodu'");
if($query){
	 echo '<script>alert("Mesajiniz Yetkililere iletildi Lutfen Sabirli Olunuz.");</script>';
 go($_SERVER['HTTP_REFERER']);
} 

}
else{
    echo '<script>alert("Lütfen Giriþ Yap");</script>';
    go("../../login.php");
}
}
else{
	echo "Giris Yap";
}

?>
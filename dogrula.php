<?php

$email = $_GET['email'];
$uyeKodu = $_GET['kod'];

require_once 'dbBaglan.php';

$query = $db->query("SELECT * FROM tbluye where uyeEmail='$email' and uyeKodu='$uyeKodu' and aktivasyon=0");
if($query){
    $update = $db->query("UPDATE tbluye set aktivasyon=1 where  uyeEmail='$email'");
    if($update){
        echo "Aktivasyon Basarili Giris Yapabilirsiniz.";
		go("/kp/login.php");
    }
    else{
        echo "Aktivasyon Basarisiz.";
    }
}
else{
    echo "Gecersiz Aktivasyon Linki";
}
<?php
error_reporting(0);
require_once '../dbBaglan.php';
session_start();
$uyeId=$_SESSION['uyeId'];
$HediyeKredi = $_POST['txtKod'];

$query = $db->query("SELECT * FROM tbluye where uyeId=$uyeId");
if($query){
    foreach ($query as $uye){
        $uyeKredi = $uye['uyeKredi'];
    }
        $query = $db->query("SELECT * FROM tblkredikod where kodYazi='$HediyeKredi'");
    if($query){
        foreach ($query as $kod){
        $kodKredi = $kod['kodKredi'];
    }
    }
     else{
        echo "Gecersiz Kod Girdiniz Yonlendiriliyorsunuz. <br/>";
            go(htmlspecialchars($_SERVER['HTTP_REFERER']));
    }
   
    $uyeKredi = $uyeKredi+$kodKredi;
    echo "Toplam Krediniz: ".$uyeKredi;
      $update= $db->query("UPDATE tbluye set uyeKredi=$uyeKredi where uyeId=$uyeId");
      if($update){
          $query = $db->query("DELETE FROM tblkredikod where kodYazi='$HediyeKredi'");
          if($query){
                go(htmlspecialchars($_SERVER['HTTP_REFERER']));
          }
      }
       else{
        echo "Gecersiz Kod Girdiniz Yonlendiriliyorsunuz. <br/>";
            go(htmlspecialchars($_SERVER['HTTP_REFERER']));
    }
    }
     else{
        echo "Gecersiz Kod Girdiniz Yonlendiriliyorsunuz.<br/>";
            go(htmlspecialchars($_SERVER['HTTP_REFERER']));
    }

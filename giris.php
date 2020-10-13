<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Giriş Kontrol...</title>
</head>

<body>

<?php 
error_reporting(0);


function GetIP(){
	if(getenv("HTTP_CLIENT_IP")) {
 		$ip = getenv("HTTP_CLIENT_IP");
 	} elseif(getenv("HTTP_X_FORWARDED_FOR")) {
 		$ip = getenv("HTTP_X_FORWARDED_FOR");
 		if (strstr($ip, ',')) {
 			$tmp = explode (',', $ip);
 			$ip = trim($tmp[0]);
 		}
 	} else {
 	$ip = getenv("REMOTE_ADDR");
 	}
	return $ip;
}

include ("dbBaglan.php");

		$uyeEmail =trim($_POST["txtEmail"]);
		$uyeSifre =trim($_POST["txtSifre"]);
		   $uyeSifre = md5($uyeSifre);
		
		if(!empty($uyeEmail) && !empty($uyeSifre)){
		$islem = $db->prepare("SELECT * FROM tbluye WHERE uyeEmail='$uyeEmail' and aktivasyon=1");
		$islem->execute();
                $say = $islem->rowCount();
              if($say==1){
                  $query = $db->query("SELECT * FROM tbluye Where uyeEmail='$uyeEmail' and uyeSifre='$uyeSifre'");
                  if($query){
                     foreach($query as $uye){
						 
                       session_start();
                         $_SESSION['uyeId'] = $uye['uyeId'];
                             $_SESSION['kulAdi'] = $uye['uyeKulAdi'];
                                 $_SESSION['uyeAdiSoyadi'] = $uye['uyeAdiSoyadi'];
                                     $_SESSION['uyeEmail'] = $uye['uyeEmail'];
                                         $_SESSION['uyeTelefon'] = $uye['uyeTelefon'];
                                         $_SESSION['uyeIp'] = GetIP();
										  $_SESSION['oturum'] = true;
                                         
                                         $uyeId = $_SESSION['uyeId'];
                                          $uyeKulAdi = $uye['uyeKulAdi'];
                                         $uyeIp = $_SESSION['uyeIp'];
                                         $uyeAdiSoyadi = $_SESSION['uyeAdiSoyadi'];
                                          date_default_timezone_set('Europe/Istanbul');
                          $tarih =  date('d.m.Y H:i:s');
                                         $query = $db->query("Insert Into tblgiris (uyeId,uyeKulAdi,uyeAdiSoyadi,uyeIp,tarih) values ($uyeId,'$uyeKulAdi','$uyeAdiSoyadi','$uyeIp','$tarih')");
                         if($query){
                             echo "Giris Basarili Reklamdan Sonra Panele Yonlendirileceksiniz.";
                             go("kp/index.php");
                         }
						 else{
                  echo "Kullanici Adi Veya Sifre Yanlis yada Hesabinizi Aktive Etmemissiniz.";
                      go("http://www.linkhavuzu.com/kp/login.php",3);
              }

                     }
					 
                      
                  }
				  else{
                  echo "Kullanici Adi Veya Sifre Yanlis yada Hesabinizi Aktive Etmemissiniz.";
                      go("http://www.linkhavuzu.com/kp/login.php",3);
              }
              }
              else{
                  echo "Kullanici Adi Veya Sifre Yanlis yada Hesabinizi Aktive Etmemissiniz.";
                      go("http://www.linkhavuzu.com/kp/login.php",3);
              }
               
			
                }
                else{
                    echo "Kullanıcı Adı Ve Şifre Boş Bırakılamaz";
                    go("http://www.linkhavuzu.com/kp/login.php");
                }
                
	



?>
</body>
</html>
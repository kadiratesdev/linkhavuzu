<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Giriş Kontrol...</title>
</head>

<body>

<?php 

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
		$sorgu  = $db->prepare("SELECT * FROM tbluye WHERE uyeEmail=? and uyeSifre=?");
		$sorgu -> execute(array ($uyeEmail,$uyeSifre));
		$islem = $sorgu -> fetch();
		if ($islem){
			session_start();
				$_SESSION['uyeEmail']=$islem['uyeEmail'];
				$_SESSION['uyeAdiSoyadi']=$islem['uyeAdiSoyadi'];
                                $_SESSION['uyeId']=$islem['uyeId'];
								  $_SESSION['kulAdi']=$islem['uyeKulAdi'];
								
								$uyeEmail = $_SESSION['uyeEmail'];
								$uyeAdiSoyadi = $_SESSION['uyeAdiSoyadi'];
								$uyeId = $_SESSION['uyeId'];
								$uyeKulAdi = $islem['uyeKulAdi'];
								$uyeIp = GetIP();
								
								
								$query=$db->query("Insert INTO tblgiris (uyeId,uyeKulAdi,uyeAdiSoyadi,uyeIp) values ($uyeId,'$uyeKulAdi','$uyeAdiSoyadi','$uyeIp')");
                                 go("kp/index.php");
									echo "Giriş Başarılı";
				
			}else{
				echo "Kullanıcı Adı veya Şifre Yanlış";
				  go("login.php");
			}
		}
		else{
			echo 'Kullanıcı Adı Ve Şifre Boş Bırakılamaz';
                           go("login.php");
			
		}
		
	



?>
</body>
</html>
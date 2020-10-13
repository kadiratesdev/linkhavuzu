<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Giriş Kontrol...</title>
</head>

<body>

<?php 
error_reporting();



include ("../dbBaglan.php");

		$adminKulAdi =trim($_POST["txtAdminKulAdi"]);
		$adminSifre =trim($_POST["txtAdminSifre"]);
		   $adminSifre = md5($adminSifre);
		  $kulAdi= strlen($adminKulAdi);
		  $sifre = strlen($adminSifre);
		
		if(!$kulAdi==0 && !$sifre==0){
	
                  $query = $db->query("SELECT * FROM tbladmin where adminKulAdi='$adminKulAdi' and adminSifre='$adminSifre'");
                  if($query){
                     foreach($query as $admin){
						
                       session_start();
                       $_SESSION['adminAdiSoyadi'] = $admin['adminAdiSoyadi'];
					   $_SESSION['adminKulAdi'] = $admin['adminKulAdi'];
					    $_SESSION['adminEmail'] = $admin['adminEmail'];
						 $_SESSION['adminTelefon'] = $admin['adminTelefon'];
						 $_SESSION['adminId'] = $admin['adminId'];
                            $_SESSION['admin'] = true;		
 	echo "Giriş Başarılı";
go("index.php");	
					 }
				  }
				    else{
					  
					  echo "Kullanıcı Adı Veya Şifre Yanlış";
				  go("login.php");
				  }
				 
		}
		else{
			echo "Kullanıcı Adı Şifre Boş Bırakılamaz";
			 go("login.php");
		}
                                     


?>
</body>
</html>
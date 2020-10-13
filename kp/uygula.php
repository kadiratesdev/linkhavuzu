
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php 

    require_once'../dbBaglan.php';
  session_start();
           
                $kulAdiSoyadi =$_POST["txtAdiSoyadi"];
		$kulAdi =trim($_POST["txtKulAdi"]);
		$kulEmail = trim($_POST['txtEmail']);
                $kulTelefon = trim($_POST['txtTelefon']);
		$kulSifre = md5($_POST['txtSifre']);
		$kulAdiSoyadi = str_replace('"',' ',$kulAdiSoyadi);
		   	   $kulAdiSoyadi = str_replace("'"," ",$kulAdiSoyadi);
			 $kulAdi = str_replace('"',' ',$kulAdi);
		   	   $kulAdi = str_replace("'"," ",$kulAdi);
			   $kulEmail = str_replace('"',' ',$kulEmail);
		   	   $kulEmail= str_replace("'"," ",$kulEmail);
			   $kulTelefon = str_replace('"',' ',$kulTelefon);
		   	   $kulTelefon= str_replace("'"," ",$kulTelefon);
			 
		   $id = $_SESSION['uyeId'];
		   
			$query = $db->query("UPDATE tbluye SET uyeAdiSoyadi = '$kulAdiSoyadi',uyeKulAdi = '$kulAdi', uyeSifre='$kulSifre',uyeEmail='$kulEmail',uyeTelefon=$kulTelefon where uyeId=$id");

      
if ( $query ){
    echo "Güncelleme İşlemi Başarılı";
    go(htmlspecialchars($_SERVER['HTTP_REFERER']));
}


?>

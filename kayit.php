<?php
include 'kp/head.php';

?>
<?php include_once("analyticstracking.php") ?>
<div class="row">
<div class="container">

    <center>

<?php 
	


    include 'dbBaglan.php';
  
              $uyeKodu = @$_POST['txtUyeKodu'];
			  
			
                $kulAdiSoyadi =$_POST["txtAdiSoyadi"];
		$kulAdi =trim($_POST["txtKulAdi"]);
		$kulSifre =trim($_POST["txtSifre"]);
                $kulEmail =trim($_POST["txtEmail"]);
	  $kulTelefon =trim($_POST["txtTelefon"]);
		
		 $kulAdiSoyadi = str_replace('"',' ',$kulAdiSoyadi);
		   	   $kulAdiSoyadi = str_replace("'"," ",$kulAdiSoyadi);
			   $kulAdiSoyadi = trim($kulAdiSoyadi);
              	 $kulAdi = str_replace('"',' ',$kulAdi);
		   	   $kulAdi = str_replace("'"," ",$kulAdi);
			   $kulAdi = trim($kulAdi);
			   	 $kulEmail = str_replace('"',' ',$kulEmail);
		   	   $kulEmail = str_replace("'"," ",$kulEmail);
			   $kulkulEmail= trim($kulEmail);
		 $kulTelefon = str_replace('"',' ',$kulTelefon);
		   	   $kulTelefon= str_replace("'"," ",$kulTelefon);
			   $kulTelefon= trim($kulTelefon);
           $kulSifre = md5($kulSifre);
           
           $ilksayi = rand (100,999);
$buyukharfler= array ('A','B','K','T','R','H','X','N','D','S','Z','M','G');
$kucukharfler= array ('a','b','k','t','r','h','x','n','d','s','z','m','g');
$ilkharf = $buyukharfler[rand(1,12)];
$ikinciharf = $kucukharfler[rand(1,12)];
$ikincisayi = rand (100,999);
$uyeKodu = $ilksayi.$ilkharf.$ikincisayi.$ikinciharf;


		 $teluzunluk = strlen($kulTelefon);
		if($teluzunluk==10){
                  	$ekle=$db->query("insert into tbluye(uyeId,uyeAdiSoyadi,uyeKulAdi,uyeSifre,uyeEmail,uyeTelefon,uyeKredi,aktivasyon,uyeKodu) values(0,'$kulAdiSoyadi','$kulAdi','$kulSifre','$kulEmail','$kulTelefon',100,1,'$uyeKodu')");       
				
		if ($ekle){
			echo '<br/><div class="alert alert-success" role="alert"><h3>Hesabiniz Aktiflestirildi Giris Yapabilirsiniz.</h3><br/>';
			  go("login.php");
       
	   $uzunluk = strlen($uyeKodu);			  
			    if($uzunluk>0){
						 $uyeKodu = @$_POST['txtUyeKodu'];
				$guncelle = $db->query("Select * from tbluye where uyeKodu='$uyeKodu'");
				if($guncelle){
					
					foreach($guncelle as $row){
						
					$refKredi = $row['uyeKredi'];
						$refKredi = $refKredi +15;
					 $uyeKodu = @$_POST['txtUyeKodu'];
						$query = $db->query("Update tbluye set uyeKredi=$refKredi where uyeKodu='$uyeKodu'");
						if($query){
							 	echo '<h3>Referans Kredisi Eklendi Devam Edebilirsiniz.</h3></div><br/>';
								  go("login.php");
						}
					}
				}
				}
	   else{
		   echo "<h3>Hesabiniz Aktiflestirildi Giris Yapabilirsiniz</h3>";
		   go("login.php");
	   }
   }
    else{
      $kontrol= $db->prepare("select * from tbluye where uyeEmail=$kulEmail");
      if ($kontrol) {
        echo  'Mevcut Eposta ile kayit yapilamaz. <br/>';
        
          go(htmlspecialchars($_SERVER['HTTP_REFERER']));
      }
       $kontrol2= $db->prepare("select * from tbluye  where kulAdi=$kulAdi");
       if($kontrol2)  { 
     echo 'Mevcut Kullanici adi ile kayit yapilamaz.<br/>';
       
          go(htmlspecialchars($_SERVER['HTTP_REFERER']));
      }
  
      }
     
		}
		else{
			echo "Tum bilgileri eksizsiz girdiginizden emin olun.";
			 go("kayitol.php");
		}
					
  


?>
</div>
</center>
</div>
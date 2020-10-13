<?php
include 'head.php';
?>
<div class="row">
<div class="container">

    <center>

<?php 
kayit();
function kayit(){
    include '../dbBaglan.php';
  
             session_start();
$ihbarciId = $_SESSION['uyeId'];			 
                $kulAdiSoyadi =$_POST["txtAdiSoyadi"];		
                $kulEmail =trim($_POST["txtEmail"]);			
	  $kulMesaj =$_POST["txtMesaj"];
	  
		 $kulAdiSoyadi = str_replace('"',' ',$kulAdiSoyadi);
		   	   $kulAdiSoyadi = str_replace("'"," ",$kulAdiSoyadi);
			  
             
			   	 $kulEmail = str_replace('"',' ',$kulEmail);
		   	   $kulEmail = str_replace("'"," ",$kulEmail);
			   $kulkulEmail= trim($kulEmail);
		 $kulMesaj = str_replace('"',' ',$kulMesaj);
		   	   $kulMesaj= str_replace("'"," ",$kulMesaj);
			  $kulMesaj= str_replace("<"," ",$kulMesaj);
         $kulMesaj= str_replace(">"," ",$kulMesaj);
		  $kulMesaj= str_replace("(","  ",$kulMesaj);
		   $kulMesaj= str_replace(")"," ",$kulMesaj);
		   $kulMesaj= str_replace("/"," ",$kulMesaj);
		   $kulMesaj= str_replace(";"," ",$kulMesaj);
           $ihbarKonusu = $_POST['txtKonu'];
            date_default_timezone_set('Europe/Istanbul');
			
                          $ihbarZamani =  date('d.m.Y H:i:s');		
                  	$ekle=$db->query("insert into tblihbar (ihbarId,ihbarciAdiSoyadi,ihbarKonusu,ihbarMesaji,ihbarZamani,ihbarciEmail,ihbarciId) values(0,'$kulAdiSoyadi','$ihbarKonusu','$kulMesaj','$ihbarZamani','$kulEmail',$ihbarciId)");       
				
		if ($ekle){
	     echo '<br/><div class="alert alert-success" role="alert"><h3>İhbarınız ulaştırıldı en kısa zamanda incelemeye alınacaktır.</h3></div>';
	   go(htmlspecialchars($_SERVER['HTTP_REFERER']),2);
   }
    else{
    
        
          go(htmlspecialchars($_SERVER['HTTP_REFERER']));
      }
      
      
  
    
	
					
  

}
?>
</div>
</center>
</div>
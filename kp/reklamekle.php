<?php
include 'head.php';
?>
<div class="row">
<div class="container">

    <center>


<?php 


 
  session_start();
             
                 $reklamBaslik= $_POST["txtReklamBaslik"];
		   $reklamLink= trim($_POST["txtReklamLink"]);
		   $reklamLink = str_replace('"',' ',$reklamLink);
		   	   $reklamLink = str_replace("'"," ",$reklamLink);
			   $reklamLink = trim($reklamLink);
	$reklamKredi= $_POST["txtReklamKredi"];
	  $reklamverenId = $_SESSION['uyeId'];
		$reklamKodu = trim($_POST['txtReklamKodu']);
			
				
                              
                     $reklamSon = explode(".",$reklamLink);
                     $reklamSon = $reklamSon[0];
				
                        
                     $reklamKodu = explode("=",$reklamKodu);
                     $reklamKodu = $reklamKodu[1];
                     $reklamKodu;
					 require_once '../dbBaglan.php';
					if($reklamKredi<1){
						echo "Reklam Kredisi 1 den küçük olamaz.";
go("reklam.php");
exit;
						}
					 
					 
					 
                      
					  
		 	$query=$db->prepare("SELECT * from tblreklam where reklamVerenId=$reklamverenId");
			$query->execute();
			$reklamSayisi = $query->rowCount();
			
			
			if($reklamSayisi<5){
				
                        if($reklamSon == "http://adf" || $reklamSon=="http://bit"||$reklamSon=="http://shorte" ||$reklamSon=="http://tl"||$reklamSon=="http://link"||$reklamSon=="http://bc"||$reklamSon=="http://gca") {
							 $ekle=$db->query("insert into tblreklam(reklamverenId,reklamId,reklamBaslik,reklamLink,reklamTiklanma,reklamKodu,reklamKredi) values($reklamverenId,0,'$reklamBaslik','$reklamLink',0,'$reklamKodu',$reklamKredi)"); 
                       
						}
else{
	  echo '<br/><div class="alert alert-danger" role="alert"><h3>Gecersiz Reklam Linki Girdiniz.</h3></div>';
	    go(htmlspecialchars($_SERVER['HTTP_REFERER']));
                                 }					
     if ($ekle){
     echo '<br/><div class="alert alert-success" role="alert"><h3>Reklamınız Eklendi</h3></div>';
	    go(htmlspecialchars($_SERVER['HTTP_REFERER']));
   }
     
                      
			}
			else{
			 echo '<br/><div class="alert alert-success" role="alert"><h3>Tüm üyelerin verim alabilmesi için reklam sınırı 5 Olarak Güncellenmiştir.</h3></div>';
	    go(htmlspecialchars($_SERVER['HTTP_REFERER']),5);	
			}

  
     
  


?>

</div>
</center>
</div>

<?php
include 'head.php';
?>
<div class="row">
<div class="container">

    <center>

<?php
include 'head.php';
$hash = $_GET['hash'];

if(isset($_SERVER['HTTP_REFERER'])){
             require_once('../dbBaglan.php');   
			
             session_start();
             $tiklayanId =$_SESSION['uyeId'];
	 $query = $db->query("SELECT * FROM tblreklam where reklamKodu='$hash'");       
if ($query){
	
    foreach($query as $reklam){
          $reklamId = $reklam['reklamId'];
            $reklamKodu = $reklam['reklamKodu'];
          $reklamVerenId = $reklam['reklamVerenId'];
            $reklamTiklanma = $reklam['reklamTiklanma'];
           $reklamKredi= $reklam['reklamKredi'];
        $reklamTiklanma = $reklamTiklanma+1;
         $query = $db->query("SELECT * from tbltiklanma where uyeId=$tiklayanId and reklamKodu='$reklamKodu'");
         if($query){
			 	
             if($query->rowCount()==0){
                 $query = $db->query("Insert into tbltiklanma (uyeId,reklamKodu) values ($tiklayanId,'$reklamKodu')");
                 if($query){
				
                     $query = $db->query("Update tblreklam set reklamTiklanma=$reklamTiklanma where reklamKodu='$reklamKodu'");
                if($query){
                 $query=$db->query("Select * from tbluye where uyeId=$reklamVerenId");
                 if($query){
                     foreach($query as $uye){
                         $uyeKredi = $uye['uyeKredi'];
                         $uyeKredi = $uyeKredi - $reklamKredi;
                         $query=$db->query("Update tbluye set uyeKredi=$uyeKredi where uyeId=$reklamVerenId");
                         if($query){
                          $query = $db->query("Select * from tbluye where uyeId=$tiklayanId");
                          if($query){
                              foreach($query as $tiklayanUye){
                                  $uyeKredi = $tiklayanUye['uyeKredi'];
                                  $uyeKredi = $uyeKredi+$reklamKredi;
                                  $uyeId = $tiklayanUye['uyeId'];
                                  $query = $db->query("Update tbluye set uyeKredi=$uyeKredi where uyeId=$uyeId");
                                  if($query){
                                      echo '<br/><div class="alert alert-success" role="alert"><h3>'.$reklamKredi.' Krediniz Hesabiniza Eklendi Devam Edebilirsiniz.</h3></div>';
                                 }
                              }
                          }
                         }
                     }
                 }
                }     
                 }
             }
             else{
                   echo '<br/><div class="alert alert-danger" role="alert"><h3>1 Reklamdan 2 Kere Kredi Alamazsin.</h3></div>';
                                 }
         }
        }	
}
      }else{
     echo '<br/><div class="alert alert-danger" role="alert"><h3>Hash Koruması Devrede (İp Log Devrede.)</h3></div>';
                                 }
        
        
        
        
	?>	
</div>
</center>
</div>
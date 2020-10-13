<!DOCTYPE html>
<html>
<head>
  <?php
    
  include 'header.php';
  
  ?>
    <script language ="javascript" >

</script>


            <div class="row">
                <div class="col-lg-12 col-md-12">



                   
                    
                    
                   
                        
                     
                 
<fieldset>

<!-- Form Name -->
<legend>Kredi Kazan</legend>

<div class="row">
    <div class="col-md-3">
    </div>
  
<div class="col-md-6">
   
   <div class="col-md-12 column productbox">
       <script> 
           function popup(link){
           
window.open("http://link.tl/114134/"+link,"sekme",200,"300"); 


          }

</script>  
        <?php
        
        
         try{
                                                                                     require_once '../dbBaglan.php';
	 $query = $db->query("SELECT * FROM tblreklam order by  rand() limit 1");
if ( $query){
    
   	foreach($query as $reklam){
            
		 $reklamKodu = $reklam['reklamKodu'];
               
			 $reklamBaslik = $reklam['reklamBaslik'];
			  $reklamLink = $reklam['reklamLink'];                          
			   $reklamKredi = $reklam['reklamKredi'];
			    $reklamTiklanma = $reklam['reklamTiklanma'];
                           $reklamVerenId = $reklam['reklamVerenId'];
						   
						   $query = $db->query("SELECT * FROM tbluye where uyeId=$reklamVerenId");
						   if($query){
							   foreach($query as $uye){
								   $uyeKulAdi = $uye['uyeKulAdi'];
								   $uyeKredi = $uye['uyeKredi'];
							   }
						   }
			
                        $uyeId = $_SESSION['uyeId'];
                                if($uyeId==$reklamVerenId){
                                    echo 'Uygun Reklam Aranıyor.';
                           echo '<meta http-equiv="refresh" content="1;URL=kredi.php">';
                         }
                         else{
                          $query3 = $db->query("select sum(uyeId) from tbltiklanma where uyeId=$uyeId and reklamKodu='$reklamKodu'");

   $tiklanmaSayisi=$query3->fetchColumn();
   if($tiklanmaSayisi<=0){
       $tiklanmaSayisi=0;
   }

         
     
                             
                      
                      
                             if($uyeKredi>5){
                               if($tiklanmaSayisi<1){
                                   
                                 
		 	 
                                   echo '
								   <div class="well">
    <img src="../img/adf.ly.png" class="img-responsive text-center">
        <div class="producttitle"><h4 class="text-center">Reklam Sahibi : '.$uyeKulAdi.'</h4></div>
        
		 <div class="pricetext"><h4 class="text-center">'.$reklamKredi.' Kredi | '.$reklamTiklanma.' Kere Tıklandı </h4> </div>
		 <br/>
    <div class="productprice"><div class="pull-right">
                         ';
                                   
                                   ?>
							
                  <a href="kredi.php"> <button  target="_new"class="btn btn-primary btn-sm" role="button"><i class="fa fa-refresh"></i> Yeni Reklam</button></a>    <button  onClick="popup('<?php echo $reklamLink  ?>')" target="_new"class="btn btn-success btn-sm" role="button"><i class="fa fa-hand-o-right"></i> Reklama Git</button><a href="kredi.php"> <a href="<?php echo "ihbar.php?reklamLink=$reklamLink" ?>"><button  target="_new"class="btn btn-danger btn-sm" role="button"><i class="fa fa-flag"></i></button></a>  </div></div><br/><br/>

	  <?php
                     echo '
</div>
     
 ';
                               }
							   else{
                                     echo 'Uygun Reklam Aranıyor.';
                           echo '<meta http-equiv="refresh" content="1;URL=kredi.php">';
                               }
							 }
							 
                               else{
                                     echo 'Uygun Reklam Aranıyor.';
                           echo '<meta http-equiv="refresh" content="1;URL=kredi.php">';
                               }
                         }
                           } 
                        
                        
			  
		}
  
         
 }
	
        catch(Exception $ex){
            
        }
     
        ?>
    </div>
    </div>
    </div>
   
</fieldset>



                </div>

               

            </div>

           

         


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>

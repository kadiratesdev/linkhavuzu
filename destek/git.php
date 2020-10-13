<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                           
                 <!-- /. ROW  -->
             
				  
				  <?php
				
					  $takipKodu = @$_GET['takip'];
				  require_once("dbBaglan.php");
				  $query=$db->query("Select * from tblcevap where takipKodu='$takipKodu'");
				  if($query){
					  foreach($query as $cevap){
                                             $mesaj = $cevap['yetkiliCevap'];
                                              $yetkili = $cevap['yetkiliAdiSoyadi'];
						 $sorgu = $db->query("select * from tbldestek where takipKodu='$takipKodu'");
                                                 if($sorgu){
                                                     foreach($sorgu as $dosya){
                                                         $dosyaId = $dosya['dosyaId'];
                                                         $uyeAdiSoyadi = $dosya['uyeAdiSoyadi'];
                                                         $uyeMesaj = $dosya ['uyeMesaj'];
                                                         $uyeEmail = $dosya['uyeEmail'];
                                                     }
                                                 }
					  }
				  }
				
				
				  ?>
              
                 <!-- /. ROW  -->  
                 <div class="row">
			<div class="panel panel-primary">
                           
                   
                    <div class="panel-heading ">
                        <h4 class="text-center">Dosya Yonetimi</h4>
                            </div>
                
                            <div class="panel-body">
							<div class="col-lg-2 col-md-2">
								</div>
								
							<div class="col-lg-8 col-md-8">
							<div class="col-lg-12 col-md-12">
						<?php  
						echo '	<label> Dosya No  : '.$dosyaId.' | Üye Adı Soyadı: '.$uyeAdiSoyadi.' | Üye Mesajı : '.$uyeMesaj.'  </label>';
						echo '<hr/>';
						echo "<label>Yetkili Cevabı : &nbsp </label>$mesaj";
						echo "<br/>";
                                                echo "<br/>";
                                                	echo "<label>Yetkili Adı Soyadı: &nbsp </label>$yetkili";
						echo "<br/>";
						echo "<br/>";
						echo '<form action="islem/yanitla.php" method="post">';
					
						echo '<a class="btn btn-info" href="dosya.php?email='.$uyeEmail.'">Geri Dön</a>';
						
					
						?>
						</div>
							
							</div>
							
							
							
                       
                        
    </div>
                              
	
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
   </div>
</div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

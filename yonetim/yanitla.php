<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head
       <?PHP
	    include("header.php");
	   include("solmenu.php");
	   
	   ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>İhbar Yönetimi </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				  
				  <?php
				
					  $id = $_GET['id'];
				  require_once("../dbBaglan.php");
				  $query=$db->query("Select * from tblihbar where ihbarId=$id");
				  if($query){
					  foreach($query as $ihbar){
						  $ihbarciId  = $ihbar['ihbarciId'];
						  $ihbarciAdiSoyadi = $ihbar['ihbarciAdiSoyadi'];
						  $ihbarKonusu = $ihbar['ihbarKonusu'];
						    $ihbarMesaji = $ihbar['ihbarMesaji'];
							$ihbarciEmail = $ihbar['ihbarciEmail'];
							$ihbarSonucu = $ihbar['ihbarSonucu'];
					  }
				  }
				
				
				  ?>
              
                 <!-- /. ROW  -->  
			<div class="panel panel-primary">
                            <div class="panel-heading">
                              İhbar & Görüş Listesi
                            </div>
                            <div class="panel-body">
							<div class="col-lg-2 col-md-2">
								</div>
								
							<div class="col-lg-8 col-md-8">
							<div class="col-lg-12 col-md-12">
						<?php  
						echo '	<label>Ihbarcı Üye No  : '.$ihbarciId.' | İhbarcı Adı Soyadı: '.$ihbarciAdiSoyadi.' | Konu : '.$ihbarKonusu.'  </label>';
						echo '<hr/>';
						echo "<label>İhbar Mesajı : &nbsp </label>".$ihbarMesaji;
						echo "<br/>";
						echo "<br/>";
						echo '<form action="islem/yanitla.php" method="post">';
						echo '<label>İhbar Yanıtı :</label> <textarea name="txtYanit" class="form-control" style="resize:none;" cols="80" rows="3">'.$ihbarSonucu.'</textarea> ';
						echo '<hr/>';
						echo '<label>İhbarcı Email : </label> <input type="text" name="txtEmail" class="form-control" value="'.$ihbarciEmail.'" readonly>';
						echo "<hr/>";
					
						?>
						</div>
							
							</div>
							
							
							<div class="col-lg-3 col-md-3">
								</div>
                               </div>
                            <div class="panel-footer">
								<div class="row">
								<div class="col-lg-3 col-md-3">
								</div>
                              <?php 	
						echo '<button class="btn btn-success" type="submit">Yanıtı Gönder</button></form>';
					  
						echo ' <a class="btn btn-danger" href="islem/ihbar.php?id='.$id.'">İhbarı Sil</a>'; ?>
						</div>
                            </div>
                        
    </div>
	
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
   <?php
   
   include("footer.php");
   ?>
       

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

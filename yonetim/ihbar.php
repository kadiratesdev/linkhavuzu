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
              
                 <!-- /. ROW  -->  
			<div class="panel panel-primary">
                            <div class="panel-heading">
                              İhbar & Görüş Listesi
                            </div>
                            <div class="panel-body">
						<div class="col-lg-12 col-md-12">
                       
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>İhbar No</th>
                                    <th>Adı Soyadı</th>
                                   
                                    <th>İhbar & Görüş</th>
									<th>Cevap</th>
									 <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
							   
							   							  function kes($kesilecek){
$kes=trim(strrev(strstr(strrev(substr($kesilecek,0,50))," ")));
return $kes;
}
					   							  function sonuc($kesilecek){
$kes=trim(strrev(strstr(strrev(substr($kesilecek,0,25))," ")));
return $kes;
}
							   
							  require_once("../dbBaglan.php");
							  $query=$db->query("SELECT * FROM tblihbar");
							  if($query){
							  foreach($query as $ihbar){
	
                                   
								  echo ' <tr>
                                    <td>'.$ihbar['ihbarId'].'</td>
                                    <td>'.$ihbar['ihbarciAdiSoyadi'].'</td>
                                    
                                    <td>'.kes($ihbar['ihbarMesaji']).'</td>
									 <td>'.sonuc($ihbar['ihbarSonucu'])."...".'</td>
									  <td><a href="yanitla.php?id='.$ihbar['ihbarId'].'"><button class="btn btn-success">Yanıtla</button></a> <a href="islem/ihbar.php?id='.$ihbar['ihbarId'].'"><button class="btn btn-danger">Sil</button></a> <a href="hesap.php?id='.$ihbar['ihbarciId'].'"><button class="btn btn-info">Üye</button></a></td>
									  
									  </tr>';
							  }
							  }
							   
							   
							   ?>
                               
                            </tbody>
                        </table>

                    </div>
                               </div>
                            <div class="panel-footer">
                             Eğer yanıt çok kısa ise ... şeklinde görünür.
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

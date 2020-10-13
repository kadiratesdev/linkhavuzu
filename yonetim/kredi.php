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
                     <h2>Kredi Yönetimi </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->  
			<div class="panel panel-primary">
                            <div class="panel-heading">
                              Üye Kredi Sıralaması
                            </div>
                            <div class="panel-body">
						<div class="col-lg-12 col-md-12">
                       
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Uye No</th>
                                    <th>Adı Soyadı</th>
                                    <th>Email</th>
                                    <th>Kredi</th>
									 <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
							   
							   							  function kes($kesilecek){
$kes=trim(strrev(strstr(strrev(substr($kesilecek,0,50))," ")));
return $kes;
}
							   
							  require_once("../dbBaglan.php");
							  $query=$db->query("SELECT * FROM tbluye order by uyeKredi desc");
							  if($query){
							  foreach($query as $uye){
	                         $uyeId = $uye['uyeId'];
                                   
								  echo ' <tr>
                                    <td>'.$uye['uyeId'].'</td>
                                    <td>'.$uye['uyeAdiSoyadi'].'</td>
                                    <td>'.$uye['uyeEmail'].'</td>
                                    <td>'.$uye['uyeKredi'].'</td>
									<td><a href="islem/kredi.php?id='.$uyeId.'&kredi=50&islem=1"><button type="submit" class="btn btn-info">50 Kredi Ver</button></a> <a href="islem/kredi.php?id='.$uyeId.'&kredi=50&islem=2"><button type="submit" class="btn btn-danger">50 Kredi Al</button></a></td>
									  </tr>';
							  }
							  }
							   
							   
							   ?>
                               
                            </tbody>
                        </table>

                    </div>
                               </div>
                            <div class="panel-footer">
                                Panel Altı
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

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
                     <h2>Reklam Yönetimi </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->  
			<div class="panel panel-primary">
                            <div class="panel-heading">
                             Reklam Listesi
                            </div>
                            <div class="panel-body">
						<div class="col-lg-12 col-md-12">
                       
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Reklam No</th>
                                    <th>Reklamcı Adı Soyadı</th>
                                    <th>Reklamcı Kullanıcı Adı</th>
                                    <th>Reklam Linki</th>
									 <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
							  require_once("../dbBaglan.php");
							  $query=$db->query("SELECT * FROM tblreklam");
							  if($query){
							  foreach($query as $reklam){
								  $reklamVerenId = $reklam['reklamVerenId'];
								 $reklamId = $reklam['reklamId'];
								 $reklamLink = $reklam['reklamLink'];
								  $query = $db->query("SELECT * FROM tbluye where uyeId=$reklamVerenId");
								  if($query){
									  foreach($query as $uye){
										  $uyeId = $uye['uyeId'];
										   $uyeAdiSoyadi = $uye['uyeAdiSoyadi'];
										   $uyeKulAdi = $uye['uyeKulAdi'];
										   $uyeTelefon = $uye['uyeTelefon'];
										   echo ' <tr>
                                    <td>'.$reklamId.'</td>
                                    <td>'.$uyeAdiSoyadi.'</td>
                                    <td>'.$uyeKulAdi.'</td>
                                    <td>'.$reklamLink.'</td>
									  <td><a href="islem/reklam.php?id='.$reklamId.'"><button class="btn btn-danger"type="submit">Sil</button></a> <a target="_blank" href="'.$reklamLink.'"><button class="btn btn-success"type="submit">Reklama Git</button></a> <a href="hesap.php?id='.$uye['uyeId'].'"><button class="btn btn-info"type="submit">Üye Bilgileri</button></a></td>
                                </tr>';
										   
									  }
									   
								  }
								 
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

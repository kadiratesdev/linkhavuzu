<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head
       <?PHP
	    include("header.php");
	   include("solmenu.php");
	  
	    $uyeKulAdi = $_SESSION['kulAdi'];
	   ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Duyuru Yönetimi </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->  
			<div class="panel panel-primary">
                            <div class="panel-heading">
                              Duyuru Listesi
                            </div>
                            <div class="panel-body">
							
							<div class="row">
								<div class="col-lg-3 col-md-3">
								</div>
								<form action="islem/duyuruekle.php" method="POST">
							<div class="col-lg-6 col-md-6">
							<div class="col-lg-4 col-md-4">
							<label>Duyuru Yazısı : </label> </div><div class="col-lg-8 col-md-8">
							<input type="text" name="txtYazi" class="form-control" required/>
								</div>
							</div>
							
							
							<div class="col-lg-3 col-md-3">
								</div>
								</div>
								<br/>
									<div class="row">
								<div class="col-lg-3 col-md-3">
								</div>
								
							<div class="col-lg-6 col-md-6">
							<div class="col-lg-4 col-md-4">
							<label>Duyuru Yazar : </label> </div><div class="col-lg-8 col-md-8">
							<input readonly type="text" value="<?php echo $uyeKulAdi; ?>" name="txtYazar" class="form-control" required />
								</div>
							</div>
							
							
							<div class="col-lg-3 col-md-3">
								</div>
								</div>
								<div class="row">
								<div class="col-lg-3 col-md-3">
								</div>
								

							<div class="col-lg-6 col-md-6">
							<br/>
							<center><button type="submit" class="btn btn-success">Duyuru Ekle</button></center>
							<div class="col-lg-4 col-md-4">
							
								</div>
								<br/>	
								
							</div>
							
							</form>
							<div class="col-lg-3 col-md-3">
							
								</div>
								</div>
								<br/>
							
							
						<div class="col-lg-12 col-md-12">
                       
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Duyuru No</th>
                                    <th>Duyuru Yazi</th>
                                    <th>Duyuru Yazar</th>
									<th>Ana Duyuru</th>
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
							  $query=$db->query("SELECT * FROM tblduyuru");
							  if($query){
							  foreach($query as $duyuru){
	                         $duyuruId = $duyuru['duyuruId'];
                                   
								  echo ' <tr>
                                    <td>'.$duyuru['duyuruId'].'</td>
                                    <td>'.$duyuru['duyuruYazi'].'</td>
                                    <td>'.$duyuru['duyuruYazar'].'</td>
									 <td>'.$duyuru['anaDuyuru'].'</td>
                                   
									<td><a href="islem/duyuru.php?id='.$duyuruId.'&islem=1"><button type="submit" class="btn btn-danger">Sil</button></a> <a href="islem/duyuru.php?id='.$duyuruId.'&islem=2"><button type="submit" class="btn btn-info">Ana D.</button></a></td>
									  </tr>';
							  }
							  }
							   
							   
							   ?>
                               
                            </tbody>
                        </table>

                    </div>
                               </div>
                            <div class="panel-footer">
                             Ana D. Butonu Duyuruyu Üste Sabitler.
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

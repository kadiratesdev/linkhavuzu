<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head
       <?PHP
	    include("header.php");
	   include("solmenu.php");

	
		   $id = $_GET['id'];
		  require_once("../dbBaglan.php");
		  $query= $db->query("SELECT * FROM tbluye where uyeId=$id");
		  if($query){
			  foreach($query as $uye){
				  $uyeAdiSoyadi = $uye['uyeAdiSoyadi'];
				  $uyeKulAdi = $uye['uyeKulAdi'];
				  $uyeEmail = $uye['uyeEmail'];
				  $uyeTelefon=$uye['uyeTelefon'];
				  $uyeSifre = $uye['uyeSifre'];
			  }
		  }
	  
	  
	   
	   ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Üye Hesap Ayarları</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->  
			<div class="panel panel-primary">
                            <div class="panel-heading">
                              Üye Hesap Ayarları
							  </div>
                            <div class="panel-body">
							<form action="islem/ayarlar.php" method="POST">
									<div class="row">
								<div class="col-lg-3 col-md-3">
								</div>
								
							<div class="col-lg-6 col-md-6">
							<div class="col-lg-4 col-md-4">
							<label>Adı Soyadı : </label> </div><div class="col-lg-8 col-md-8">
							<input type="text" value="<?php echo $uyeAdiSoyadi;?>"  name="txtAdiSoyadi" class="form-control" required/>
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
							<label>Kullanıcı Adı: </label> </div><div class="col-lg-8 col-md-8">
					
						
				
						
								<input type="text" name="txtKulAdi" value="<?php echo $uyeKulAdi;?>" class="form-control" required/>
						
						
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
							<label>Email : </label> </div><div class="col-lg-8 col-md-8">
							<input type="text" value="<?php echo $uyeEmail;?>" name="txtEmail" class="form-control" required/>
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
							<label>Telefon : </label> </div><div class="col-lg-8 col-md-8">
							<input type="text" value="<?php echo $uyeTelefon;?>" name="txtTelefon" class="form-control" required/>
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
							<label>Şifre : </label> </div><div class="col-lg-8 col-md-8">
							<input type="password"value="<?php echo $uyeSifre;?>" name="txtSifre" class="form-control" required/>
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
							<center><button type="submit" class="btn btn-success">Güncelle</button></center>
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
                       
                        

                    </div>
                               </div>
                            <div class="panel-footer">
                              
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

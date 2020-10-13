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
                     <h2>Hesap Ayarları</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              <?php
			 $adminId = $_SESSION['adminId'];
			$adminAdiSoyadi = $_SESSION['adminAdiSoyadi'];
				$adminKulAdi = $_SESSION['adminKulAdi'];
				$adminEmail = $_SESSION['adminEmail'];
				$adminTelefon = $_SESSION['adminTelefon'];
			require_once("../dbBaglan.php");
			$query = $db->query("Select * from tbladmin where adminId=$adminId");
			 if($query){
				 foreach($query as $admin){
					 $adminSifre = $admin['adminSifre'];
					 
				 }
			 }
			  
			  
			  ?>
                 <!-- /. ROW  -->  
			<div class="panel panel-primary">
                            <div class="panel-heading">
                              Hesap Ayarları
							  </div>
                            <div class="panel-body">
							<form action="islem/ayarlar.php" method="POST">
									<div class="row">
								<div class="col-lg-3 col-md-3">
								</div>
								
							<div class="col-lg-6 col-md-6">
							<div class="col-lg-4 col-md-4">
							<label>Adı Soyadı : </label> </div><div class="col-lg-8 col-md-8">
							<input type="text" value="<?php echo $adminAdiSoyadi;  ?>" name="txtAdiSoyadi" class="form-control" required/>
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
					
						
				
						
								<input type="text"  readonly  value="<?php echo $adminKulAdi;  ?>"    name="txtKulAdi"  class="form-control" required/>
						
						
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
							<input type="email"  value="<?php echo $adminEmail;  ?>"  name="txtEmail" class="form-control" required/>
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
							<input type="text"  value="<?php echo $adminTelefon;  ?>"  name="txtTelefon" class="form-control" required/>
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
							<input type="password" value="<?php echo $adminSifre;  ?>" name="txtSifre" class="form-control" required/>
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
                              Kullanıcı Adı Sadece Süper Admin Tarafından Degiştirilebilir.
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

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
                     <h2>Promosyon Kod Yönetimi </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->  
			<div class="panel panel-primary">
                            <div class="panel-heading">
                              Promosyon Listesi
							  </div>
                            <div class="panel-body">
							
							<div class="row">
								<div class="col-lg-3 col-md-3">
								</div>
								<form action="islem/promosyon.php" method="POST">
							<div class="col-lg-6 col-md-6">
							<div class="col-lg-4 col-md-4">
							<label>Promosyon Kodu : </label> </div><div class="col-lg-8 col-md-8">
						<?php
						
						 $ilksayi = rand (100,999);
$buyukharfler= array ('A','B','K','T','R','H','X','N','D','S','Z','M','G');
$kucukharfler= array ('a','b','k','t','r','h','x','n','d','s','z','m','g');
$ilkharf = $buyukharfler[rand(1,12)];
$ikinciharf = $kucukharfler[rand(1,12)];
$ikincisayi = rand (100,999);
$promosyonKodu = $ilksayi.$ikinciharf.$ilkharf.$ikincisayi.$ikinciharf.$ilkharf;
						
						echo '	<input type="text" name="txtYazi" value="'.$promosyonKodu.'" class="form-control" required/>';
						
						?>
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
							<label>Promosyon Degeri: </label> </div><div class="col-lg-8 col-md-8">
							<input type="text" value="100" name="txtDeger" class="form-control" required/>
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
							<center><button type="submit" class="btn btn-success">Promosyon Ekle</button></center>
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
                                    <th>Promosyon No</th>
                                    <th>Promosyon Kodu</th>
                                    <th>Promosyon Degeri</th>
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
							  $query=$db->query("SELECT * FROM tblkredikod");
							  if($query){
							  foreach($query as $promosyon){
	                         $promosyonId = $promosyon['KodId'];
                                   
								  echo ' <tr>
                                    <td>'.$promosyon['KodId'].'</td>
                                    <td>'.$promosyon['kodYazi'].'</td>
                                    <td>'.$promosyon['kodKredi'].'</td>
                                   
									<td><a href="islem/promosyon.php?id='.$promosyonId.'&islem=1"><button type="submit" class="btn btn-danger">Sil</button></a> </td>
									  </tr>';
							  }
							  }
							   
							   
							   ?>
                               
                            </tbody>
                        </table>

                    </div>
                               </div>
                            <div class="panel-footer">
                               Promosyon degeri üyeye verecegi kredidir.
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

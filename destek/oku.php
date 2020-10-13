<!doctype html>
<html lang="tr">
<head>
	
<?php
require_once 'head.php';
?>
    
                
                
                <div class="row">
                    
                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Mesaj Kutusu</h4>
                                <p class="category">Cevaplanmış Mesajlarınızı Buradan Görebilirsiniz</p>
                            </div>
                            <br/>
                        </div>
                            <div class="col-lg-12 col-md-12">
                                 <br/>
                        <div class="card">
                            
                            <div class="content">
                                
                              
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                        
                                          
                                           <?php 
										   require_once("dbBaglan.php");
										   $id = @$_GET['id'];
										   $query = $db->query("SELECT * from tbldestek where destekId=$id");
										   if($query){
											   foreach($query as $destek){
												   $adiSoyadi = $destek['adiSoyadi'];
												   $konu  = $destek['konu'];
												 
												echo '<label>Adı Soyadı : '.$adiSoyadi.' </label><label> &nbsp; | Konu : '.$konu.'</label>';   
											   }
											     $destekKodu = $destek['destekKodu'];
										   }
                                             ?>
                                              <hr/>
                                            </div>
										   <?php
										    $mesaj = $db->query("SELECT * from tblmesaj where takipKodu='$destekKodu'");
										   if($mesaj){
											   foreach ($mesaj as $mesajlar){
												   $mesaj = $mesajlar['mesaj'];
												    $cevap = $mesajlar['cevap'];
												  $cevapUzunluk = strlen($cevap);
												  $mesajUzunluk = strlen($mesaj);
												  if($mesajUzunluk>1){
													 
													   echo ' 
                                        
                                             <div class="col-md-12 col-lg-12">
                                                Mesajınız : <div class="alert alert-info"><label class="text-justice" style="color:black;">'.@$mesaj.'</label>
                                             </div>
                                              
									    ';
												  }												 
												    if($cevapUzunluk>1){
													   echo ' 
                                        
                                             
                                               <div class="col-md-12 col-lg-12">
                                                Yetkili Cevabı : <div class="alert alert-success"><label class="text-justice" style="color:black;">'.$cevap.'</label>
                                             </div>
                                            
                                     
									   
									    ';
												  }
												 echo '</div>';
											   }
										   }
										   
										   
										   
										   ?>
										<div class="col-md-12 col-lg-12">
										 <form action="islem/cevapla.php" method="POST">
                                                 Mesajınız : <div class="alert alert-warning">
												<textarea name="txtMesaj" class="form-control"></textarea>
												<input type="hidden" name="txtKod" value="<?php echo $destekKodu; ?>" class="form-control">
                                             </div>
                                              <button  type="submit" class="btn btn-warning btn-fill btn-wd">Cevapla</button>  <a href="destek.php" type="submit" class="btn btn-danger btn-fill btn-wd">Geri Dön</a>
									  </form>         
									
                                       </div>
										
                                        </div>
                                          </div>
										  
										 <hr/>
										 
                                            </div>
											
                                        </div>
                                          </div>
										  
                                     
									
										
									   
                                   

                                   

                                
                                   
									 
                                
                                   
									   
                                      
                                   
                                    <div class="clearfix"></div>
                             
                            </div>
                        </div>
                    </div>
                            
                            
                            
                            
                        </div>
                    </div>
                    
                    
                    
                </div>
                
                

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.linkhavuzu.com">
                              Link Havuzu
                            </a>
                        </li>
                        <li>
                              <a href="http://www.linkhavuzu.com/sohbet/index.php">
                              Sohbet
                            </a>
                        </li>
                        <li>
                              <a href="http://www.linkhavuzu.com/radyo.html">
                              Radyo
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; 2016, yapımcı <i class="fa fa-heart heart"></i> by <a href="http://www.linkhavuzu.com">Link Havuzu.Com</a>
                </div>
            </div>
        </footer>

    </div>
</div>

</body>


    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Bildirim Paneline <b>Hoşgeldiniz</b> - Ödeme bildirimlerinize 1 saat içinde dönüş yapılacaktır."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>

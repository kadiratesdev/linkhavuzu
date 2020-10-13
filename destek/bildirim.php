<!doctype html>
<html lang="en">

    
    <head>
	
<?php
require_once 'head.php';


?>
    
                
                
                <div class="row">
                    
                
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Ödeme Bildirimi Yap</h4>
                                <p class="category">Tüm Ödeme Bildirimlerini Bu Sayfadan Yapabilirsiniz.</p>
                               <br/>
                            </div>
                            
                             <div class="col-lg-12 col-md-12">
                                 <br/>
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Bildirim </h4>
                            </div>
                            <div class="content">
                                
                                     <form method="POST" action="islem/bildirim.php"> 
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                           
                                            <div class="form-group">
                                                <label>Kullanıcı Adı </label>
                                                <input type="text" name="txtKulAdi" class="form-control border-input" readonly value="<?php echo $kulAdi; ?>">
                                            </div>
                                        </div>
                                          </div>
                                         <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Ödeme Yöntemi</label>
                                                <select name="txtYontem" class="form-control">
                                                    <option value="Mobil Ödeme">Mobil Ödeme</option>  
                                                    <option value="Kredi Kartı">Kredi Kartı</option>  
                                                     <option value="Paysafe Card">Paysafe Card</option>
                                                      <option value="Credits">Credits</option>  
                                                </select>
                                            </div>
                                        </div>
                                       </div>
                                  

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Adı Soyadı</label>
                                                <input type="text" name="txtAdiSoyadi" value="<?php echo $adiSoyadi; ?>" class="form-control border-input" required />
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ödeme Tarihi</label>
                                                <input type="date" name="txtTarih" class="form-control border-input" placeholder="Home Address" required/>
                                            </div>
                                        </div>
                                    </div>
                                          <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ödeme Miktarı</label>
                                                <input type="text" name="txtMiktar" class="form-control border-input" placeholder="Örn : 100 TL" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telefon</label>
                                                <input type="text" name="txtTelefon"value="<?php echo $uyeTelefon; ?>" class="form-control border-input" required/>
                                            </div>
                                        </div>
                                        
                                     
                                    </div>
<div class="row">
    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Paket</label>
                                                <select  name="txtPaket"class="form-control">
                                                    <option value="Mini Paket" >Mini Paket</option>  
                                                    <option value="Ekonomik Paket">Ekonomik Paket</option>  
                                                     <option value="Altın Paket">Altın Paket</option>
                                                      
                                                </select>
                                            </div>
                                        </div>
</div>
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Müşteri Notu</label>
                                                <textarea  name="txtMesaj"rows="5" class="form-control border-input" placeholder="Eklemek İstediginiz Birşey Varsa" value="Mike"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Bildirim Oluştur</button>
                                   
                                    </div>
                                   </form>
                                    <div class="clearfix"></div>
                                </form>
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

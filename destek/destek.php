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
                                <h4 class="title">Destek Paneli</h4>
                                <p class="category">Tüm Soru Ve Mesajlarınız</p>
                            </div>
                            <br/>
                        </div>
                            <div class="col-lg-12 col-md-12">
                                 <br/>
                        <div class="card">
                            
                            <div class="content">
                                <form action="islem/destek.php" method="POST">
                                
                                    <div class="row">
                                    
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Adı Soyadı </label>
                                                <input type="text" name="txtAdiSoyadi" readonly  value="<?php echo $adiSoyadi; ?>"class="form-control border-input" required />
                                            </div>
                                        </div>
                                          </div>
                                         <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Konu</label>
                                                <select name="txtKonu" class="form-control">
                                                    <option value="Ödeme">Ödeme</option>  
                                                    <option value="Paketler">Paketler</option>  
                                                     <option value="Diger">Diger</option>  
                                                </select>
                                            </div>
                                        </div>
                                             <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telefon (+90)</label>
                                                <input name="txtTelefon"type="text" value="<?php echo $uyeTelefon; ?>"  class="form-control border-input" required/>
                                            </div>
                                        </div>
                                       </div>
                                  

                                   

                                   

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Destek Mesajı</label>
                                                <textarea name="txtMesaj" rows="5" class="form-control border-input"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info  btn-fill btn-wd">Destek Mesajı Gönder</button>
                                    </div>
</form>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                            
                            
                              <div class="col-md-12 col-lg-12">
                            <div class="content table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Adı Soyadı</th>
                                    	<th>Konu</th>
                                    	<th>Tarih</th>
                                    	<th>Durum</th>
                                        <th>İşlem</th>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $query = $db->query("SELECT * FROM tbldestek where uyeId=$uyeId");
                                      if($query){
                                          foreach ($query as $destek) {
                                              $destekId = $destek['destekId'];
                                              $konu = $destek['konu'];
                                              $tarih = $destek['tarih'];
                                              $durum = $destek['durum'];
                                              
                                              if ( $durum==1) {
                                                   $durum = "Cevaplandı";
                                              }
                                              else{
                                                   $durum="Beklemede";
                                              }
                                              
                                              echo '  <tr>
                                        	<td>'.$destekId.'</td>
                                        	<td>'.$adiSoyadi.'</td>
                                        	<td>'.$konu.'</td>
                                        	<td>'.$tarih.'</td>
                                        	<td>'.$durum.'</td>
                                                <td><a href="oku.php?id='.$destekId.'" class="btn btn-success">Oku</a> <a href="islem/sil.php?id='.$destekId.'" class="btn btn-danger">Sil</a></td>
                                        </tr>';
                                          }
                                      }
                                      ?>
                                       
                                    </tbody>
                                </table>

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
                            <a href="http://www.linkhavuzu.com/kp/sohbet/index.php">
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

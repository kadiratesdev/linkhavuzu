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
                                <h4 class="title">Ödeme Bildirimlerim</h4>
                                <p class="category">Tüm Ödeme Bildirimleriniz</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Paket Adı</th>
                                    	<th>Fiyat</th>
                                    	<th>Tarih</th>
                                    	<th>Durum</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                       $query = $db->query("select * from tblbildirim where uyeId=$uyeId");
                                       if($query){
                                           foreach($query as $bildirim){
                                               $bildirimId = $bildirim['bildirimId'];
                                               $paketAdi = $bildirim['paketAdi'];
                                               $fiyat = $bildirim['fiyat'];
                                               $tarih = $bildirim['tarih'];
                                               $durum = $bildirim['durum'];
                                               if($durum==1){
                                                   $durum="Onaylandı";
                                               }
                                               else{
                                                   $durum = "Beklemede";
                                               }
                                               echo '<tr>
                                        	<td>'.$bildirimId.'</td>
                                        	<td>'.$paketAdi.'</td>
                                        	<td>'.$fiyat.' TL</td>
                                        	<td>'.$tarih.'</td>
                                        	<td>'.$durum.'</td>
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

<?php
include("head.php");
?>


<body>


</body>

  <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> YONETIM ANASAYFA</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Anasayfa</a></li>
											  	
					</ol>
				</div>
			</div>
              
            <div class="row">
			<div class="col-md-1"></div>
			
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading text-center">
                            Bekleyen  Ödeme Bildirimleri
                          </header>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Adı Soyadı</th>
                                 <th><i class="icon_calendar"></i> Tarih</th>
                                 <th><i class="icon_mail_alt"></i> Kullanıcı Adı</th>
                                 <th><i class="icon_pin_alt"></i> Paket </th>
                                 <th><i class="icon_cogs"></i> Yatan Miktar</th>
								  <th><i ></i> Ödeme Yöntemi</th>
								   <th><i ></i> Durumu </th>
                                 <th><i class="icon_cogs"></i> İşlemler </th>
                              </tr>
                             <?php
							 require_once("../dbBaglan.php");
							 $query = $db->query("SELECT * from tblbildirim");
							 if($query){
								 foreach($query as $bildirim){
									 $adiSoyadi = $bildirim['adiSoyadi'];
									  $tarih = $bildirim['tarih'];
									   $kulAdi = $bildirim['kulAdi'];
									   $paket = $bildirim['paketAdi'];
									   $miktar = $bildirim['fiyat'];
									   $yontem = $bildirim['yontem'];
									   $id  = $bildirim['bildirimId'];
									    $durum = $bildirim['durum'];
										
										if($durum==0){ 
										$durum="Beklemede.";
										}
										else{
											$durum="Onaylandı.";
										}
									 echo ' <tr>
                                 <td>'.$adiSoyadi.'</td>
                                 <td>'.$tarih.'</td>
                                 <td>'.$kulAdi.'</td>
                                 <td>'.$paket.'</td>
                                 <td>'.$miktar.'</td>
								 <td>'.$yontem.'</td>
								 <td>'.$durum.'</td>	
                                
                                 
                                     <td>
                                      <a class="btn btn-success" href="bildirim/onayla.php?id='.$id.'"> <i class="icon_check_alt2"></i> Onayla</a>
									    
                                      <a class="btn btn-danger" href="bildirim/sil.php?id='.$id.'"> <i class="icon_close_alt2"></i> Sil</a> 
                                 
                                  </td>
                              </tr>          ';
								 }
							 }
							
							 
							 ?>
                                         
                           </tbody>
                        </table>
                          
                      </section>
                  </div>
              </div>
			  
			  
              <!-- page end-->
          </section>
      </section>
			</div>
			</div>
			</div>
			</section>
			</section>
			







 <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>
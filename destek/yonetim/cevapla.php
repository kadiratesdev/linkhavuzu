<?php
include("head.php");
?>
   <?php
							 		  $id = $_GET['id'];
				 require_once("../dbBaglan.php");
							 $query = $db->query("SELECT * from tbldestek where durum=0");
							 if($query){
								 foreach($query as $destek){
									 $adiSoyadi = $destek['adiSoyadi'];
									  $tarih = $destek['tarih'];
									   $konu = $destek['konu'];
									   $mesaj = $destek['mesaj'];
									    $destekId = $destek['destekId'];
										  $cevap = $destek['cevap'];
									  
								 }
							 }
							
							 
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
                        
                         	<div class="panel panel-primary">
                            <div class="panel-heading">
                             BEKLEYEN DESTEK MESAJLARI
                            </div>
                            <div class="panel-body">
							<div class="col-lg-2 col-md-2">
								</div>
								
							<div class="col-lg-8 col-md-8">
							<div class="col-lg-12 col-md-12">
						
						 <?php 
										   require_once("../dbBaglan.php");
										   $id = @$_GET['id'];
										   $query = $db->query("SELECT * from tbldestek where destekId=$id");
										   if($query){
											   foreach($query as $destek){
												   $adiSoyadi = $destek['adiSoyadi'];
												   $konu  = $destek['konu'];
												 
												echo '<label>Adı Soyadı : '.$adiSoyadi.' </label><label> &nbsp; | Konu : '.$konu.'</label>';   
											   }
											     $destekKodu = $destek['destekKodu'];
												 $uyeId = $destek['uyeId'];
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
                                                 Üye Mesajı : <div class="alert alert-info"><label class="text-justice" style="color:black;">'.@$mesaj.'</label>
                                             </div>
                                              
									    ';
												  }												 
												    if($cevapUzunluk>1){
													   echo ' 
                                        
                                             
                                               <div class="col-md-12 col-lg-12">
                                                 Cevabınız : <div class="alert alert-success"><label class="text-justice" style="color:black;">'.$cevap.'</label>
                                             </div>
                                            
                                     
									   
									    ';
												  }
												 echo '</div>';
											   }
										   }
										   
										   
										   ?>
						</div>
							</div>
							</div>
                            <div class="panel-footer">
							<div class="row">
							<div class="col-lg-2 col-md-3">
								
								</div>
								<form action="islem/yanitla.php" method="POST">
								<div class="col-lg-8 col-md-3">
							<textarea name="txtMesaj" style="resize:none;" cols="130" rows="5" class="form-control"></textarea>
						    <input type="hidden" value="<?php echo $destekKodu; ?>" name="txtKod"/>
							 <input type="hidden" value="<?php echo $uyeId; ?>" name="txtUyeId"/>
						</div>
							</div
							
								<div class="row">
								
<br/>
								
						<button class="btn btn-success" type="submit">Yanıtı Gönder</button></form>
					  
						 <a class="btn btn-danger" href="islem/ihbar.php?id=<?php echo $id; ?>">Destegi Sil</a>
								<div class="col-lg-3 col-md-3">
								
								</div>
                              
						</div>
                            </div>
                          
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
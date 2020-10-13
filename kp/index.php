<?php include_once("../analyticstracking.php") ?>
<!DOCTYPE html>
<html>
<head>
    <?php
    
  include 'header.php';
  
  ?>

            <div class="row">
                <div class="col-lg-12 col-md-12">



                   
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Reklam Tablosu
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Reklam Id</th>
                                            <th>Reklam Başlığı</th>
                                            <th>Reklam Linki</th>
                                            <th>Tıklanma Sayısı</th>
                                            <th>Sil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
										<?php
										 try{
                                                                                     require_once '../dbBaglan.php';
	 $query = $db->query("SELECT * FROM tblreklam WHERE reklamverenId=$uyeId");
if ( $query){
   	foreach($query as $reklam){
		 $reklamId = $reklam['reklamId'];
			 $reklamBaslik = $reklam['reklamBaslik'];
			  $reklamLink = $reklam['reklamLink'];
			   $reklamTiklanma = $reklam['reklamTiklanma'];
			  echo '<tr class="gradeU">
                                            <td>'.$reklamId.'</td>
                                            <td>'.$reklamBaslik.'</td>
                                            <td>'.$reklamLink.'</td>
                                            <td class="center">'.$reklamTiklanma.'</td>
                                             <td><a href="sil.php?id='.$reklamId.'">Sil</a></td>
                                        </tr>';
			  
		}
  
         
 }
	}
	catch (Exception $ex){
		echo $ex;
	}
	
										?>
										
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    
                   

                </div>

               

            </div>

           

         


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
	
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
<?php include("footer.php"); ?>
</body>
</html>

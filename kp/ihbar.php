<!DOCTYPE html>
<html>
<head>
  <?php
    
  include 'header.php';
  
  ?>
    <script language ="javascript" >

</script>


           
<fieldset>

<!-- Form Name -->
<legend>İhbar Hattı</legend>


    <?php
      require_once '../dbBaglan.php';
        $id = $_SESSION['uyeId'];
         $query = $db->query("SELECT * FROM  tbluye where uyeId=$id");

if ( $query->rowCount() ){
   
     foreach( $query as $row ){
     }
}     

        ?>

</head>

<body>


         
				
	 <div class="container">
   
        

    <br/>
  
<fieldset>

<!-- Form Name -->


<!-- Text input-->

<br/>
<form action="ihbaret.php" class="form-horizontal table-hover" method="POST" >

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Adı Soyadı : </label>  
  <div class="col-md-4">
  <input type="text" class="form-control" readonly value="<?php echo $row['uyeAdiSoyadi'] ?>" name="txtAdiSoyadi" /> <br />

		
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email : </label>  
  <div class="col-md-4">
     <input type="text" class="form-control" readonly value="<?php echo $row['uyeEmail'] ?>" name="txtEmail" /> <br />
		
  </div>
</div>

  <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">İhbar Konusu : </label>  
  <div class="col-md-4">
     <select class="form-control" name="txtKonu">
<option value="Sahte Reklam">Sahte Reklam</option>
<option value="Bug & Açık">Bug & Açık</option>
<option value="Diğer">Diğer</option>
</select>
		
  </div>
</div>
    <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Mesajınız : </label>  
  <div class="col-md-4">
     <?php 
	 $reklamLink = @$_GET['reklamLink'];
	$uzunluk = strlen($reklamLink);
	 if($uzunluk==0){
		  echo ' <textarea class="form-control" name="txtMesaj"></textarea> <br />';
	 }
	 else{
		 echo ' <textarea class="form-control" name="txtMesaj" >'.$reklamLink.' linkindeki reklam sahtedir ilgilenmenizi arz ederim.</textarea> <br />'; 
	 }
	
	 
	 ?>
		
  </div>
</div>
   
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
      <button type="submit" class="btn btn-outline-rounded btn-info">İhbarı Gönder</button>
		
  </div>
</div>
    </form>
	
	
<div class="form-group">
  
  <div class="col-md-11">
     <div class="panel panel-primary">
                        <div class="panel-heading">
                          İhbar Tablosu
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>İhbar Numarası</th>
                                            <th>İhbar Konusu</th>
                                            <th>İhbar Mesajı</th>
                                            <th>İhbar Zamanı</th>
                                            <th>İhbar Sonucu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									
									 $query = $db->query("SELECT * FROM  tblihbar where ihbarciId=$id");

if ( $query->rowCount() ){
   
     foreach( $query as $ihbar ){
		 $ihbarNo = $ihbar['ihbarId'];
		 		 $ihbarKonusu = $ihbar['ihbarKonusu'];
				 $ihbarZamani = $ihbar['ihbarZamani'];
				 $ihbarMesaji = $ihbar['ihbarMesaji'];
                                  $ihbarSonucu = $ihbar['ihbarSonucu'];
				 echo '<tr><td>'.$ihbarNo.'</td>
									<td>'.$ihbarKonusu.'</td>
									<td>'.$ihbarMesaji.'</td>
                                                                            <td>'.$ihbarZamani.'</td>
                                                                            <td>'.$ihbarSonucu.'</td>
									</tr>';
     }
}     
     ?>
									
									</tbody>
									</div>
									</div>
									
	
</div>
		
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



									
          

      
        


  

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

</body>

</html>

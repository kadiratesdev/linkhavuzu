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
<legend>Hesap Ayarları</legend>

<div class="row">
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
<form action="uygula.php" class="form-horizontal" method="POST">

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Adı Soyadı : </label>  
  <div class="col-md-4">
  <input type="text" class="form-control" value="<?php echo $row['uyeAdiSoyadi'] ?>" name="txtAdiSoyadi" /> <br />

		
  </div>
</div>
    <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Kullanıcı Adı : </label>  
  <div class="col-md-4">
  <input type="text" class="form-control" value="<?php echo $row['uyeKulAdi'] ?>" name="txtKulAdi" /> <br />

		
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email : </label>  
  <div class="col-md-4">
     <input type="text" class="form-control" value="<?php echo $row['uyeEmail'] ?>" name="txtEmail" /> <br />
		
  </div>
</div>
    <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Telefon : </label>  
  <div class="col-md-4">
      <textarea class="form-control" maxlength="10" name="txtTelefon" ><?php echo $row['uyeTelefon'] ?></textarea> <br />
		
  </div>
</div>
    <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Şifre : </label>  
  <div class="col-md-4">
      <input  type="password"class="form-control"value="<?php echo $row['uyeSifre'] ?>" name="txtSifre" /><br />
		
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
      <button type="submit" class="btn btn-outline-rounded btn-info">Güncelle</button>
		
  </div>
</div>
    </form>
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

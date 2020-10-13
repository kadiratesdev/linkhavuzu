<!DOCTYPE html>
<html>
<head>
  <?php
    
  include 'header.php';
   $ilksayi = rand (100,999);
$buyukharfler= array ('A','B','K','T','R','H','X','N','D','S','Z','M','G');
$kucukharfler= array ('a','b','k','t','r','h','x','n','d','s','z','m','g');
$ilkharf = $buyukharfler[rand(1,12)];
$ikinciharf = $kucukharfler[rand(1,12)];
$ikincisayi = rand (100,999);
$reklamKodu = $ilksayi.$ilkharf.$ikincisayi.$ikinciharf;
  ?>

            <div class="row">
                <div class="col-lg-12 col-md-12">



                 
                    
                    
                   
                        
                     
                    <form action="reklamekle.php"  method="POST"class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Reklam Ekle</legend>

<!-- Select Basic -->


  <div class="form-group">
  <label class="col-md-3 control-label" for="Nom22"> </label>  
  <div class="col-md-5">
    <center><iframe width="400" height="300" src="https://www.youtube.com/embed/wfaBNPseMyo" frameborder="0" allowfullscreen></iframe></center>
  <center><h2>Reklam Eklemeden Önce Kesinlikle İzlenmelidir.</h2></center>
  </div>
   <div class="col-md-4">
  <h4></h4>
    
  </div>
</div>
  
  
<div class="form-group">
  <label class="col-md-3 control-label" for="Nom22">Kısaltılacak Link : </label>  
  <div class="col-md-5">
  <input  readonly name="txtReklamKodu" value="http://www.linkhavuzu.com/kp/git.php?hash=<?php echo $reklamKodu; ?>" class="form-control  input-md"  type="text" required>
    
  </div>
   <div class="col-md-4">
  <h4>* Bu Linki Kısaltmak Zorunludur.</h4>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-3 control-label" for="Nom22">Reklam Başlığı : </label>  
  <div class="col-md-5">
  <input id="Nom22" name="txtReklamBaslik" placeholder="LinkHavuzu.Com" class="form-control  input-md"  type="text"required>
    
  </div>
  <div class="col-md-4">
  <h4>* Bir kaç kelime ile teşvik et.</h4>
    
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="Prénom">Reklam Linkiniz : </label>  
  <div class="col-md-5">
  <input id="Prénom" name="txtReklamLink" placeholder="http://adf.ly/1cjwNP" class="form-control input-md"  type="text"required>
    
  </div>
    <div class="col-md-4">
  <h4>* Reklam servisinden aldıgınız link.</h4>
    
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-3 control-label" for="Prénom">Reklam Kredisi : </label>  
  <div class="col-md-5">
      <select class="form-control"  name="txtReklamKredi">
             <option value="1">1</option>
          <option  value="2">2</option>
           <option  value="3">3</option>
            <option  value="4">4</option>
             <option   value="5">5</option>
              
      </select>
    
  </div>
   <div class="col-md-4">
  <h4>* En az 3 kredi tavsiye edilir.</h4>
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="send"></label>
  <div class="col-md-4">
    <button id="send" name="send" class="btn btn-primary">Reklamı Ekle</button>
  </div>
</div>


</fieldset>
</form>


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

</body>

</html>

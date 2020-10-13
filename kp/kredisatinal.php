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
<legend>Kredi Satın Al</legend>

<div class="row">
    <div class="col-md-2">
        
    </div>
  
<div class="col-md-6">
    <form method="POST" action="puanekle.php">
          Promosyon Kodunuzu Giriniz : <input name="txtKod"type="text"/>
                <input value="Doğrula" class="btn btn-success"type="submit"/>
            
            
        </form>
   </div>
   <div class="col-md-12 column productbox">
       
          </div>


                </div>
          
       <script> 
           
           function popup(link){
            window.location.reload(true);
window.open('git.php?id='+link,"sekme",200,"300"); 


          }

</script>  
      
        


  

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

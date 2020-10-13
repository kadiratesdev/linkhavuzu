<script>
function panoyaKopyala(btn,txt) 
{ 
var copyTextarea = document.querySelector('#'+txt); 
copyTextarea.select(); 
try { 
var successful = document.execCommand('copy'); 
var msg = successful ? 'successful' : 'unsuccessful'; 
console.log('Copying text command was ' + msg); 
} catch (err) { 
console.log('Kopayalanamadı'); 
} 
}
</script>


 <?php

   
   include("head.php");
	include("menu.php");

	
	 $uyeId= $_SESSION['uyeId'];
	   
	try{
require_once("../dbBaglan.php");
	$query = $db->query("SELECT * FROM tbluye where uyeId=$uyeId");
	if($query){
		foreach($query as $uye){
			 $uyeAdiSoyadi = $uye['uyeAdiSoyadi'];
			  $uyeKredi = $uye['uyeKredi'];
			  $uyeKodu = $uye['uyeKodu'];
		}
	}
	}
	catch (Exception $ex){
		echo $ex;
	}
 	try{
	require_once("../dbBaglan.php");
	 $query = $db->query("SELECT COUNT(*) FROM tblreklam WHERE reklamverenId=$uyeId");
if ( $query->rowCount() ){
   
   $reklamsayisi=$query->fetchColumn();
         
 }
	}
	catch (Exception $ex){
		echo $ex;
	}
 

 	try{
	require_once("../dbBaglan.php");
	  $query3 = $db->query("select sum(reklamTiklanma) from tblreklam where reklamverenId=$uyeId");
if ( $query3->rowCount() ){
  
   $tiklanmaSayisi=$query3->fetchColumn();
   if($tiklanmaSayisi<=0){
       $tiklanmaSayisi=0;
   }
}
	}
	catch (Exception $ex){
		echo $ex;
	}
	try{
require_once("../dbBaglan.php");
	  $query = $db->query("SELECT COUNT(*) FROM tbluye");
if ( $query){
   
   $uyeSayisi=$query->fetchColumn();
         
 }
if($uyeSayisi>0){
  $uyeSayisi = $uyeSayisi;
}
else{
    $uyeSayisi=0;
}
	}
	catch (Exception $ex){
		echo $ex;
	}
try{
	
	$query = $db->query("SELECT * FROM tblduyuru where anaDuyuru=1");
	if($query){
		foreach($query as $duyuru){
			 $duyuruYazi = $duyuru['duyuruYazi'];
			 $duyuruYazar = $duyuru['duyuruYazar'];
		}
	}
	}
	catch (Exception $ex){
		echo $ex;
	}
 
  ?>
  
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
       
        <!-- end navbar top -->
<?php include("solmenu.php"); ?>
        
        <!--  page-wrapper -->
        <div id="page-wrapper">
	
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Kullanıcı Paneli</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert" style="background-color:#F5D76E;">
                        <i class="fa fa-exclamation-circle"></i><b> <?php echo $duyuruYazi; ?></b>
</i><b>&nbsp;  </b> &nbsp;
                    </div>
                </div>
				
				
                <!--end  Welcome -->
            </div>


            <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-money fa-3x"></i>&nbsp;<b> <h5> <?php echo number_format($uyeKredi);  ?></b> Krediniz Var</h5>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-eye fa-3x"></i>&nbsp;<b> <h5> <?php echo $tiklanmaSayisi;  ?></b> Tıklanma Sayısı </h5>
                </div>
				 </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        <i class="fa fa-rss fa-3x"></i>&nbsp;<b><h5> <?php echo $reklamsayisi;  ?></b> Reklam Sayısı </h5>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        <i class="fa  fa-user fa-3x"></i>&nbsp;<b></b><h5> <?php echo $uyeSayisi;  ?></b> Toplam Üye </h5>
                    </div>
                </div>
                <!--end quick info section -->
				
				
				 </div>
				 
				 
				 
				  <div class="row">
					  <div class="col-lg-12">
					   <div class="alert alert-success">
					     <div class="row">
					<div class="col-lg-1">

					 
					   </div>
					   <div class="col-lg-9">
					<?php   echo '  <h4 class="text-center" >Referans Linkiniz (Her Kayıt İçin 50 Kredi)</h4>  <input readonly  name="refLink" id="refLink"class="form-control" value="http://www.linkhavuzu.com/kayitol.php?reflink='.$uyeKodu.'" type="text"/>'; ?> 	<br/> <button type="submit" class="pull-right btn btn-primary" name="btnKopyala" onclick="panoyaKopyala('btnKopyala','refLink')" >Kopyala</button> </b>
  </div>
                     	<br/>
							<br/>
								
                    </div>
				
				  </div>
				   </div>
				   </div>
				
                   
					   
				 
           
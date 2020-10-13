<?php
require_once("../dbBaglan.php");
$query = $db->prepare("Select * from tblgiris");
$query->execute();
$oturum = $query->rowCount();
?>
<link href="../css/footer.css" rel="stylesheet" type="text/css"/>
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!--footer start from here-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter">LinkHavuzu.Com</div>
        <p>Link Havuzu havuz sistemini kullanarak kullanıcıların birbirine para kazandırmasını sağlayan bir sitedir. </p>
        <p><i class="fa fa-map-pin"></i>Ankara/Sincan , Türkiye</p>
        <p><i class="fa fa-phone"></i> Telefon (+90) : Yakında </p>
        <p><i class="fa fa-envelope"></i> E-mail : linkhavuzudestek@gmail.com</p>
		  <p><i class="fa fa-user"></i><?php echo $oturum; ?> Tekil Oturum</p>
        
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">SPONSOR REKLAMLARI</h6>
        <ul class="footer-ul">
             
          <li><a href="http://www.classbilisim.com"> Class Bilişim</a></li>
          <li><a href="http://www.botbas.com">BotBas Instagram Takipci</a></li>
            <li><a href="http://tarsussehirrehberi.com"> Tarsus Sehir Rehberi</a></li>
         
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">DUYURULAR</h6>
        <div class="post">
         
       <?php 
	   try{
	
	$query = $db->query("SELECT * FROM tblduyuru");
	if($query){
		foreach($query as $duyuru){
			 $duyuruYazi = $duyuru['duyuruYazi'];
			 $duyuruYazar = $duyuru['duyuruYazar'];
			 echo ' <p>  '.$duyuruYazi.'<span>'.$duyuruYazar.'</span></p>';
		}
	}
	}
	catch (Exception $ex){
		echo $ex;
	}
	   
	   ?>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.twitter.com/linkhavuzuTR"><a style="color:white;" href="https://www.facebook.com/linkhavuzu">Facebook</a></blockquote>
               <blockquote cite="https://www.facebook.com/facebook"><a style="color:white;" href="https://www.twitter.com/linkhavuzuTR">Twitter</a></blockquote>
                  <blockquote cite="https://www.youtube.com/channel/UCyeWEWSNvMrR5tGmaxNARVg"><a style="color:white;" href="https://www.youtube.com/channel/UCyeWEWSNvMrR5tGmaxNARVg">Youtube</a></blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p>© 2016 - Linkhavuzu.com | Tüm hakları saklıdır.</p>
    </div>
    <div class="col-md-6">
      <ul class="bottom_ul">
        <li><a href="http://www.linkhavuzu.com">Linkhavuzu.com</a></li>
       <li><a href="http://www.classbilisim.com">Class Bilişim</a></li>
       <li><a href="http://www.botbas.com">BotBas.Com</a></li>
      </ul>
    </div>
  </div>
</div>


<?php
require_once("../dbBaglan.php");


/* include("proxy.php");
 $ulke = ip_info($ip,"Country Code");
if($ulke!="TR"){
	echo '<script>alert("VPN Tespit Edildi");</script>';
 go("http://www.linkhavuzu.com");
}

*/
session_start();
$oturum = $_SESSION['oturum'];
if($oturum){
	
}
else{
go("login.php");
}

   try{
	require_once("../dbBaglan.php");
	$query = $db->query("SELECT * FROM tblduyuru");
	if($query){
		foreach($query as $duyuru){
			 $duyuruYazi = $duyuru['duyuruYazi'];
		}
	}
	}
	catch (Exception $ex){
		echo $ex;
	}

?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">


<div id="myTestAd">
<!-- REKLAM ALANI !-->
</div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
			  <ul class="nav navbar-top-links navbar-left">
			
			  <li> 
			
			
			  
			  </li>
			  </ul>
			
			
			
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                
       <?php


	   
	   
	   require_once("../dbBaglan.php");
	$query = $db->prepare("SELECT * FROM tblduyuru");
	   $query->execute();
	   $bildirim = $query->rowCount();
	   ?>
                	

                
<li class="dropdown">
                    <a  href="/kp/sohbet/index.php">
                        <i class="fa fa-wechat fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                   
                    <!-- end dropdown-alerts -->
                </li>
				
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="ayarlar.php"><i class="fa fa-user fa-fw"></i>Hesap Ayarları</a>
                        </li>
                       
                        <li class="divider"></li>
                        <li><a href="cikis.php"><i class="fa fa-sign-out fa-fw"></i>Çıkış Yap</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
				<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning"><?php echo $bildirim; ?></span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
					<?php
					   try{
	require_once("../dbBaglan.php");
	$query = $db->query("SELECT * FROM tblduyuru");
	if($query){
		foreach($query as $duyuru){
			 $duyuruYazi = $duyuru['duyuruYazi'];
			 $duyuruYazar = $duyuru['duyuruYazar'];
			 echo '  <li>
                           
                                <div>
								<div class="container-fluid">
                                    <i class="fa fa-comment fa-fw"></i> '.$duyuruYazi.'
                                    <span class="pull-right text-muted small">'.$duyuruYazar.'</span><hr/>
                                </div>
								</div>
                           
                        </li>';
		}
	}
	}
	catch (Exception $ex){
		echo $ex;
	}
					?>
					
				
                      
                       
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
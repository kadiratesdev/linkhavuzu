<?php
try{
	   require_once '../dbBaglan.php';
	$query = $db->query("SELECT * FROM tbluye where uyeId=$uyeId");
	if($query){
		foreach($query as $uye){
			 $uyeAdiSoyadi = $uye['uyeAdiSoyadi'];
			  $uyeKredi = $uye['uyeKredi'];
		}
	}
	}
	catch (Exception $ex){
		echo $ex;
	}


?>
<nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                   <li>
				   &nbsp;
				   </li>
                  
                    <li >
                        <a href="index.php"><i class="fa fa-home fa-fw"></i>Anasayfa</a>
                    </li>
                    <li>
                        <a href="reklam.php"><i class="fa fa-plus fa-fw"></i> Reklam Ekle </a>
                       
                      
                    </li>
					
                     <li>
                        <a href="kredi.php"><i class="fa fa-money fa-fw"></i> Kredi Kazan</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-ticket fa-fw"></i> Kredi İşlemleri<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li >
                                 <a href="http://www.linkhavuzu.com/destek/paketler.php"><i class="fa fa-money fa-fw"></i> Kredi Satın Al</a>
                            </li>
                             <li>
                                 <a href="http://www.linkhavuzu.com/destek/bildirim.php"><i class="fa fa-money fa-fw"></i> Ödeme Bildirimi Yap</a>
                            </li>
                               <li>
                                 <a href="kredisatinal.php"><i class="fa fa-money fa-fw"></i> Promosyon Etkinleştir</a>
                            </li>
                            
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="ayarlar.php"><i class="fa fa-cog fa-fw"></i>Hesap Ayarları</a>
                    </li>
                     <li>
                        <a href="ihbar.php"><i class="fa fa-cog fa-warning"></i> İhbar ve Görüş Hattı</a>
                    </li>
					 <li >
                        <a href="http://www.linkhavuzu.com/kp/sohbet/index.php"><i class="fa fa-wechat fa-fw"></i> Geyik & Sohbet Alanı</a>
                    </li>
                   
                    <li>
                        <a href="cikis.php"><i class="fa fa-user-times fa-fw"></i> Çıkış Yap</a>
                        
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
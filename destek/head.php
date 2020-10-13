<?php
  session_start();
 $uyeId= $_SESSION['uyeId'];
  $oturum = @$_SESSION['oturum'];
  if(!$oturum){
      echo '<script>alert("Lütfen Giriş Yapın");</script>';
  }
    
  
  	 	try{
	require_once("dbBaglan.php");
	 $query = $db->query("SELECT COUNT(*) FROM tblreklam WHERE reklamverenId=$uyeId");
if ( $query->rowCount() ){
   
   $reklamsayisi=$query->fetchColumn();
         
 }
	}
	catch (Exception $ex){
		echo $ex;
	}
  
   $query = $db->query("SELECT * FROM tbluye WHERE uyeId=$uyeId");
  if($query){
      foreach($query as $row){
         
   
   $uyeKredi=$row['uyeKredi'];
         
 
      }
  }
  
  $query = $db->query("SELECT COUNT(*) FROM tblbildirim WHERE uyeId=$uyeId and durum=0");
  if ( $query->rowCount() ){
   
   $bildirimsayisi=$query->fetchColumn();
         
 }
$query=$db->query("SELECT * FROM tbluye where uyeId=$uyeId");
if($query){
    foreach($query as $uye){
        $kulAdi = $uye['uyeKulAdi'];
        $adiSoyadi = $uye['uyeAdiSoyadi'];
        $uyeTelefon = $uye['uyeTelefon'];
    }
}
  
    ?>

<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ÖDEME BİLDİRİMİ</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                  link havuzu  Ödeme Bildirimi Sistemi
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="ti-panel"></i>
                        <p>Anasayfa</p>
                    </a>
                </li>
                <li>
                    <a href="bildirim.php">
                        <i class="ti-user"></i>
                        <p>Ödeme Bildirimi yap</p>
                    </a>
                </li>
                <li>
                    <a href="bildirimlerim.php">
                        <i class="ti-view-list-alt"></i>
                        <p>BİLDİRİMLERİM</p>
                    </a>
                </li>
                <li>
                    <a href="paketler.php">
                        <i class="ti-package"></i>
                        <p>PAKETLER</p>
                    </a>
                </li>
                <li>
                    <a href="destek.php">
                        <i class="ti-pencil-alt2"></i>
                        <p>DESTEK PANELİ</p>
                    </a>
                </li>
              
                <li>
                    <a href="cikis.php">
                        <i class="ti-close"></i>
                        <p>ÇIKIŞ YAP</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Bildirim Paneli</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown">
                              <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">1</p>
									<p>Bildirimler</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Ödemeniz Onaylanana Kadar Bekleyiniz.</a></li>
                               
                              </ul>
                        </li>
						<li>
                            <a href="../kp/index.php">
								<i class="ti-home"></i>
								<p>Siteye Dön</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-money"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Kredi</p>
                                         <?php echo number_format($uyeKredi); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> <a href="">Şimdi Güncelle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-window"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Reklam</p>
                                          <?php echo $reklamsayisi; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                           <i class="ti-reload"></i> <a href="">Şimdi Güncelle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-ticket"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Bildirimler</p>
                                           <?php echo $bildirimsayisi; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-power-off"></i> <a href="bildirim.php">Şimdi Bildirim Yap</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-package"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Paketler</p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                         <i class="ti-power-off"></i> <a href="paketler.php">Paketlere Gözat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
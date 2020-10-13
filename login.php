<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Link Havuzu Giriş Yap</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Link Havuzu.Com</h1><span><i class='fa fa-clock-o'></i> + <i class='fa fa-code'></i> = <a href='http://linkhavuzu.com'>Link Havuzu</a></span>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Üye Ol</div>
  </div>
  <div class="form" id="giris">
    <h2>Giriş Yap</h2>
    <form action="../giris.php" method="POST">
      <input name="txtEmail" type="email" placeholder="E-Posta"/>
      <input name="txtSifre" type="password" placeholder="Şifre"/>
      <button type="submit" >Giriş</button>
    </form>
  </div>
  <div class="form">
  
    <h2>Hesap Oluştur</h2>
	
    <form action="../kayit.php" method="POST">
      <input type="text" name="txtAdiSoyadi" placeholder="AdiSoyadi"/>
	   <input type="text" name="txtKulAdi" placeholder="Kullanıcı Adı"/>
	    <input type="email" name="txtEmail" placeholder="Email"/>
      <input type="password" name="txtSifre" placeholder="Password"/>
	  <input type="text" name="txtTelefon" placeholder="Telefon(531)"/>
    
      
      <button type="submit">Kayıt Ol</button>
    </form>
  </div>
  <div class="cta"><a href="http://linkhavuzu.com">Şifrenizi mi unuttunuz ?</a></div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <script src="js/login.js"></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Yönetim Paneli Giris</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    
    
  </head>

  <body>

    <hgroup>
  
 
</hgroup>
<form action="giris.php" method="post">
  <div class="group">
  
    <input type="text" name="txtAdminKulAdi" required /><span class="highlight"></span><span class="bar"></span>
    <label>Kullanıcı Adı</label>
  </div>
  <div class="group">
    <input type="password" name="txtAdminSifre" required/><span class="highlight"></span><span class="bar"></span>
    <label>Şifre</label>
  </div>
  <button  type="submit"class="button buttonBlue">Giriş Yap
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>

  

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>

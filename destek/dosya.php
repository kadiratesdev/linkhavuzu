<?php

require_once("dbBaglan.php");

$uyeEmail = $_GET['email'];
 
$kontrol = strlen($uyeEmail);
if($kontrol<1){
    go("index.php");
}


?>
<html>
    <head>
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <br/>
<table class="table table-hover" >
  <thead class="thead-inverse">
    <tr>
      <th>Dosya No</th>
      <th>Adı Soyadı</th>
      <th>Mesaj</th>
      <th>Dosya Cevap</th>
      <th>İslem</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
        try{
	 

	$sorgu = $db->query("select * from tbldestek where uyeEmail='$uyeEmail'");
	if($sorgu){
		foreach($sorgu as $dosya){
			$takipKodu = $dosya['takipKodu'];
			$sorgu = $db->prepare("select * from tblcevap where takipKodu='$takipKodu'");
                            $sorgu->execute();
			 $say = $sorgu->fetchColumn();
                        if($say==0){
                              echo '<th scope="row">'.$dosya['dosyaId'].'</th>
      <td>'.$dosya['uyeAdiSoyadi'].'</td>
       <td>'.$dosya['uyeMesaj'].'</td>
      <td>Cevap Bekleniyor</td>
      <td><a href="" class="btn btn-danger">Beklemede</a></td>
    </tr>';
                        }
                        else{
                              echo '<th scope="row">'.$dosya['dosyaId'].'</th>
      <td>'.$dosya['uyeAdiSoyadi'].'</td>
       <td>'.$dosya['uyeMesaj'].'</td>
      <td>Cevaplandı</td>
      <td><a href="git.php?takip='.$takipKodu.'" class="btn btn-success">Dosyaya Git</a></td>
    </tr>';
                        }
		}
	}
	else{
		echo "Basarisiz Oldun.";
	}
}
catch(Exception $ex){
	echo $ex;
}
        
   ?>
  </tbody>
</table>


        </div>
</body>
    </html>
<?php

require_once("dbBaglan.php");

$uyeEmail = $_POST['txtEmail'];
$uyeAdiSoyadi = $_POST['txtAdiSoyadi'];
$uyeMesaj = $_POST['txtMesaj'];
try{
	 $ilksayi = rand (100,999);
$buyukharfler= array ('A','B','K','T','R','H','X','N','D','S','Z','M','G');
$kucukharfler= array ('a','b','k','t','r','h','x','n','d','s','z','m','g');
$ilkharf = $buyukharfler[rand(1,12)];
$ikinciharf = $kucukharfler[rand(1,12)];
$ikincisayi = rand (100,999);
$takipKodu = $ilksayi.$ikinciharf.$ilkharf.$ikincisayi.$ikinciharf.$ilkharf;

	$sorgu = $db->query("insert into tbldestek (dosyaId,uyeEmail,uyeAdiSoyadi,uyeMesaj,takipKodu) values (0,'$uyeEmail','$uyeAdiSoyadi','$uyeMesaj','$takipKodu')");
	if($sorgu){
		go("dosya.php?email=$uyeEmail");
		
	}
	else{
		echo "Basarisiz Oldun.";
	}
}
catch(Exception $ex){
	echo $ex;
}




?>
<?php
header('Content-Type: text/html; charset=utf-8');
$postUrl='http://panel.vatansms.com/panel/smsgonderNNpost.php';
$MUSTERINO='';
$KULLANICIADI='';
$SIFRE='';      
$ORGINATOR='';   

$TUR='Normal';  // Normal yada Turkce
$ZAMAN='2014-04-07 10:00:00'; 


$numara1='5316921012';
$mesaj1='Bu birinci telefona gonderdigim mesaj';
$numara2='5316921012';
$mesaj2='Bu ikinci telefona gonderdigim mesaj';

$xmlString='data=<sms>
<kno>'. $MUSTERINO .'</kno> 
<kulad>'. $KULLANICIADI .'</kulad> 
<sifre>'.$SIFRE .'</sifre>    
<gonderen>'.  $ORGINATOR .'</gonderen>  
<telmesajlar>     
<telmesaj>           
    <tel>'. $numara1.'</tel><mesaj>'. $mesaj1 .'</mesaj> 
</telmesaj>   
<telmesaj>         
    <tel>'. $numara2.'</tel><mesaj>'. $mesaj2 .'</mesaj>  
</telmesaj>
</telmesajlar>
<tur>'. $TUR .'</tur> 
</sms>';  

// Xml içinde aþaðýdaki alanlarýda gönderebilirsiniz.
//<zaman>'. $ZAMAN.'</zaman> Ýleri tarih için kullanabilirsiniz

$Veriler =  $xmlString;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $postUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $Veriler);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
$response = curl_exec($ch);
curl_close($ch);
echo $response;
?>
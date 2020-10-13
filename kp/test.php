<?php
include("proxy.php");

if(ip_info(GetIP(), "Country Code")=="TR"){
	echo "Türkiyeden Baglanýyorsun";
}
else{
	echo '<script>alert("VPN Tespit Edildi");</script>';
}


?>
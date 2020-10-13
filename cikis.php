<?php

session_start();
include("dbBaglan.php");
$uyeId = $_SESSION['uyeId'];
$query=$db->query("DELETE FROM tblgiris where uyeId =$uyeId");
echo $uyeId;
$db=null;
session_destroy();

?>
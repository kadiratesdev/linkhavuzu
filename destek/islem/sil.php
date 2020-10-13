<?php
session_start();
$oturum = $_SESSION['oturum'];
require '../dbBaglan.php';

if($oturum){
    $id = @$_GET['id'];
$query= $db->query("Delete from tbldestek where destekId=$id");
if($query){
    go("../destek.php");
}
}
else{
    echo '<script>alert("Lütfen Giriş Yap");</script>';
    go("../../login.php");
}


?>
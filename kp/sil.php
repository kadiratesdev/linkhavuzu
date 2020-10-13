<?php

$id = $_GET['id'];
session_start();
$uyeId = $_SESSION['uyeId'];
try{
             require_once('../dbBaglan.php');                                                                        require_once '../dbBaglan.php';
	 $query = $db->query("SELECT * FROM tblreklam where reklamId=$id and reklamVerenId=$uyeId");
if ( $query){
     $sil= $db->query("DELETE FROM tblreklam where reklamId=$id and reklamVerenId=$uyeId");
     if($sil){
         go("index.php");
     }
      else{
                    echo '<script>alert("Gecersiz islem denediniz yonlendiriliyorsunuz.");</script>';
                }
   	        }
                else{
                    echo '<script>alert("Gecersiz islem denediniz yonlendiriliyorsunuz.");</script>';
                }
  
         
 }
        catch(Exception $ex){
            
        }
?>


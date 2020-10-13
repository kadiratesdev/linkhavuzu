<?php

session_start();
include("../dbBaglan.php");
go("../index.php");
session_destroy();

?>
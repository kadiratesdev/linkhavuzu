<?php

require_once '../dbBaglan.php';
session_start();

session_destroy();
go("login.php");
?>
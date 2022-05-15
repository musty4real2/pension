<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
$vid=$_GET['vid'];
include("connect.php");

//UPDATE
$update="UPDATE `voters` SET `payment_status`='paid' WHERE `id`='$vid'";
$query=@mysql_query($update);
if(!$query){echo "OOPS! Error encountered during payment of  outsanding payments. Please try again.";}

if($query){
	header("location:view.php?status={$_GET['status']}&signout=true&vid=$vid");
	
	}


?>
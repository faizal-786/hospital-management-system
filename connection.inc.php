<?php
session_start();
$con=mysqli_connect("localhost","saurabh","Saurabh@55555","hms");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/hms/');
define('SITE_PATH','http://localhost/hms/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>
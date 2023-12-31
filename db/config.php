<?php
// error_reporting(0);
session_start();
date_default_timezone_set('Asia/Kolkata');
define('BASE_URL', 'http://localhost/KMF/');
define('BASE_URL_IMG', 'http://localhost/KMF/KMF-Media-Panel/images/');
$conn = mysqli_connect('localhost', 'root', '', 'kmfmedia');
if (!$conn) {
	die('Database Connection Failed !');
}

$date = date('d-m-Y') . ' ' . date('h:m:s');

<?php
	include 'konfiguracja.php';
	if(!isset($_COOKIE['hasloROOT']) ||  $_COOKIE['hasloROOT'] != $prawidloweHaslo ) {
		header("Location: wyloguj.php");
		die();
	}
	//exec("VBoxManage unregistervm '".$_GET["info"]."' --delete");
	$connect = mysqli_connect('artkoc7548.mysql.dhosting.pl', 'xeid7h_koczwara', '_tyS7%Zi6K', 'che4zu_koczwara');
	$info = $_GET["info"];
	$sqldelete = "DELETE FROM ab_maszyny WHERE nazwaMaszyny='$info'";
	$klondelete=mysqli_query($connect,$sqldelete);

	mysqli_close($connect);
	header("Location: administracja3.php");
	die();
	//echo $info;
?>
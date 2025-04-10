<?php
	include 'konfiguracja.php';
	if(!isset($_COOKIE['hasloROOT']) ||  $_COOKIE['hasloROOT'] != $prawidloweHaslo ) {
		header("Location: wyloguj.php");
		die();
	}
	$connect = mysqli_connect('artkoc7548.mysql.dhosting.pl', 'xeid7h_koczwara', '_tyS7%Zi6K', 'che4zu_koczwara');
					
	//exec("vboxmanage snapshot ".$_GET["nazwa"]." take czysty");
	for ($i = 0; $i < $_GET["kopii"]; $i++)
	{

		$nazwa = $_GET["nazwa"] . "_" . $i;
		$iduzytkownika = 1; // Możesz pobrać to np. z sesji

		$sqlklon = "INSERT INTO ab_maszyny (iduzytkownika,nazwamaszyny) VALUES ($iduzytkownika, '$nazwa')";
		$klon=mysqli_query($connect,$sqlklon);
			
	// 	if($_GET["linked"] == "0101")
	// 	{
	// 		exec("VBoxManage clonevm '".$_GET["nazwa"]."' --snapshot czysty --options link --name '".$_GET["nazwa"]."_".$i."' --register");
	// 	}
	// 	else
	// 	{
	// 		exec("VBoxManage clonevm '".$_GET["nazwa"]."' --snapshot czysty --name '".$_GET["nazwa"]."_".$i."' --register");
	// 	}
	// 	exec("VBoxManage modifyvm '".$_GET["nazwa"]."_".$i."' --vrde on --vrdeport ".$_GET["portrdp"]." --vrdeaddress ".$_GET["iprdp"]);
	}

	mysqli_close($connect);
	header("Location: administracja3.php");
	die();
?>
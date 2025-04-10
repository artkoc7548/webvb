<?php
	include 'konfiguracja.php';
	$hasloStare = hash("sha256",$_GET["stare"]);
	$hasloNowe = hash("sha256",$_GET["nowe"]);
	
	$connect = mysqli_connect('artkoc7548.mysql.dhosting.pl', 'xeid7h_koczwara', '_tyS7%Zi6K', 'che4zu_koczwara');
	

	$sql = "SELECT id FROM ab_uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$hasloNowe."'";
	
	$rezultat = mysqli_query($connect,$sql);

	if(mysqli_num_rows($rezultat) != 1) {
		header("Location: ustawienia.php");
		die();
	}
	mysqli_query($connect, "UPDATE ab_uzytkownicy SET haslo='".$hasloNowe."' WHERE login='".$_COOKIE['login']."' && haslo='".$hasloStare."'");
	mysqli_close($connect);
	header("Location: wyloguj.php");
	die();
?>
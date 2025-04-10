<?php
	include 'konfiguracja.php';
	
	$haslo = hash("sha256",$_GET["pwd"]);
	
	//echo $haslo;
	
	$connect = mysqli_connect('artkoc7548.mysql.dhosting.pl', 'esh7ch_koczwara', 'Saejohlai1oh', 'an9dah_koczwara');
	
	$haslo = hash("sha256",$_GET["pwd"]);
	//$connect = mysqli_connect('artkoc7548.mysql.dhosting.pl', 'xeid7h_koczwara', '_tyS7%Zi6K', 'che4zu_koczwara');	
	$sql="SELECT id FROM ab_uzytkownicy WHERE login='".$_GET["lgn"]."' AND haslo='".$haslo."'";
    
	$rezultat = mysqli_query($connect,$sql);
	if(mysqli_num_rows($rezultat) == 1) {
		mysqli_close($connect);
		setcookie('login', $_GET["lgn"], time()+3600*24);
		setcookie('haslo', $haslo, time()+3600*24);
		//header("Location: menu.php");
		die();
	}
	mysqli_close($connect);
	header("Location: logowanie.php");
	die();
?>
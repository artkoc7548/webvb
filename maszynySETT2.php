<?php 
	include 'konfiguracja.php';
	$connect = mysqli_connect('artkoc7548.mysql.dhosting.pl', 'xeid7h_koczwara', '_tyS7%Zi6K', 'che4zu_koczwara');
	
	$sql = "SELECT id FROM ab_uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$_COOKIE['haslo']."'";

	$rezultat = mysqli_query($connect,$sql);


	if(mysqli_num_rows($rezultat) != 1) {
		header("Location: wyloguj.php");
		die();
	}
	mysqli_close($connect);
	// exec("VBoxManage controlvm '".$_GET["nazwa"]."' poweroff");
	// if (!empty($_GET["typ"])){
	// 	exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --ostype '".$_GET["typ"]."'");
	// }
	// if (!empty($_GET["ram"])){
	// 	exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --memory ".$_GET["ram"]);
	// }
	// if (!empty($_GET["sciezka"])){
	// 	exec("VBoxManage storageattach '".$_GET["nazwa"]."' --storagectl IDE --port 0 --device 0 --type dvddrive --medium '".$_GET["sciezka"]."'");
	// }
	// if (!empty($_GET["vram"])){
	// 	exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --vram ".$_GET["vram"]." --accelerate3d off --audio alsa --audiocontroller ac97");
	// }
	// if (!empty($_GET["karta1"])){
	// 	exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --nic1 ".$_GET["karta1"]." --nictype1 82540EM --cableconnected1 on");
	// }
	// if (!empty($_GET["karta2"])){
	// 	exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --nic2 ".$_GET["karta2"]." --nictype1 82540EM --cableconnected1 on");
	// }
	// if (!empty($_GET["karta3"])){
	// 	exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --nic3 ".$_GET["karta3"]." --nictype1 82540EM --cableconnected1 on");
	// }
	// if (!empty($_GET["karta4"])){
	// 	exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --nic4 ".$_GET["karta4"]." --nictype1 82540EM --cableconnected1 on");
	// }
	// if (!empty($_GET["pulpitIP"]) && !empty($_GET["pulpitPort"])){
	// 	exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --vrde on --vrdeport ".$_GET["pulpitPort"]." --vrdeaddress ".$_GET["pulpitIP"]);
	// }
	header("Location: maszyny.php");
	die();
 ?>
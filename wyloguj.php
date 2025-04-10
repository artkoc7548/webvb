<?php
	// setcookie('login', NULL, time()-1);
	// setcookie('haslo', NULL, time()-1);
	// setcookie('hasloROOT', NULL, time()-1);
	// header("Location: index.php");
	// die();

// Wyczyść ciasteczka
setcookie('login', '', time() - 3600, "/");
setcookie('haslo', '', time() - 3600, "/");
setcookie('hasloROOT', '', time() - 3600, "/");

// Zakończ sesję
session_start();
session_unset();  // Czyści zmienne sesyjne
session_destroy(); // Niszczy sesję

// Przekierowanie na stronę logowania
header("Location: index.php");
exit;
	


?>
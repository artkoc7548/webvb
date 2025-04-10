<?php
			// include 'konfiguracja.php';
         	// $username = $_COOKIE['login'];
			
			// $connect = mysqli_connect('artkoc7548.mysql.dhosting.pl', 'xeid7h_koczwara', '_tyS7%Zi6K', 'che4zu_koczwara');

			// $sqll1 = "SELECT id FROM ab_uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$_COOKIE['haslo']."'";

			// $rezultat = mysqli_query($connect,$sqll1);

			// if(mysqli_num_rows($rezultat) == 1) {
			// 	$_SESSION['user'] = $username; // Zapisz dane w sesji
			// 	header("Location: menu.php");
			// 	die();
			// }
			// mysqli_close($connect);
	


include 'konfiguracja.php';
session_start();

if (isset($_COOKIE['login']) && isset($_COOKIE['haslo'])) {
    $username = $_COOKIE['login'];
    $password = $_COOKIE['haslo']; // ale nie powinno tu być hasła!

    // Zamiast ciasteczka z hasłem, zaleca się logowanie przez formularz
    $connect = new mysqli('artkoc7548.mysql.dhosting.pl', 'xeid7h_koczwara', '_tyS7%Zi6K', 'che4zu_koczwara');

    if ($connect->connect_error) {
        die("Błąd połączenia: " . $connect->connect_error);
    }

    // Użyj zapytania przygotowanego
    $stmt = $connect->prepare("SELECT id FROM ab_uzytkownicy WHERE login=? AND haslo=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $_SESSION['user'] = $username;
        header("Location: menu.php");
        exit;
    } else {
        echo "Błędne dane logowania.";
    }

    $stmt->close();
    $connect->close();
} else {
    echo "Brak wymaganych danych logowania.";
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>


		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	</head>
	<body>
	<div class="navbar">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand">Zarządzanie wirtualnymi maszynami przez stronę WWW</a>
			</div>
			<div class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
				<li><a href="index.php">Główna Strona</a></li>
				<li><a href="rejestracja.php">Rejestracja</a></li>
				<li class="active"><a href="logowanie.php">Logowanie</a></li>
				<li><a href="administracja.php">Administracja</a></li>
			  </ul>
			</div>
		  </div>
		</div>
	</div>
		<div class="container">
			<div class="jumbotron">
				<h1>Logowanie:</h1></br>
				<form action="logowanie2.php" method="get">
					<div class="form-group">
						<label for="lgn">Login: </label> <input type="text" name="lgn"><br>
					</div>
					<div class="form-group">
						<label for="pwd">Haslo: </label> <input type="password" name="pwd"><br>
					</div>
					<div class="form-group">
						<input type="submit" value="Zaloguj się" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
		<div class="container">
			<div class="span4">
				© 2015 Jakub Biliński - All Rights Reserved
			</div>
		</div>
	</body>
</html>
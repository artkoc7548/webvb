<?php
			include 'konfiguracja.php';

		if(!isset($_COOKIE['hasloROOT']) ||  $_COOKIE['hasloROOT'] != $prawidloweHaslo ) {
				header("Location: wyloguj.php");
				die();
			}

	// $prawidloweHaslo = "1234";

	// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// 	$haslo = $_POST['haslo'];
	
	// 	if ($haslo === $prawidloweHaslo) {
	// 		// Ustaw ciasteczko ważne przez 1 godzinę
	// 		setcookie('hasloROOT', $prawidloweHaslo, time() + 3600, "/", "", false, true);
	// 		header("Location: index.php");
	// 		exit();
	// 	} else {
	// 		echo "Błędne hasło. <a href='administracja.php'>Spróbuj ponownie</a>";
	// 	}
	// } else {
	// 	header("Location: index.php");
	// 	exit();
	// }


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
				<li><a href="logowanie.php">Logowanie</a></li>
				<li class="active"><a href="administracja.php">Administracja</a></li>
			  </ul>
			</div>
		  </div>
		</div>
	</div>
		<div class="container">
			<div class="jumbotron">
				<h1>Lista maszyn:</h1>
				<table class="table table-hover">
				<tr>
					<th>Id</th>
					<th>Nazwa</th>
					<th>Stan</th>
					<th>Akcja</th>
				</tr>
				<?php
					$connect = mysqli_connect('artkoc7548.mysql.dhosting.pl', 'xeid7h_koczwara', '_tyS7%Zi6K', 'che4zu_koczwara');
					$sqla3="SELECT id, nazwamaszyny FROM ab_maszyny";
					$lista = mysqli_query($connect, $sqla3) or die();
					while($linia = mysqli_fetch_assoc($lista)) {
						echo('<tr>');
						echo('<td>'.$linia["id"].'</td>');
						echo('<td>'.$linia["nazwamaszyny"].'</td>');
						//if (exec("VBoxManage list runningvms | grep -w '".$linia["nazwaMaszyny"]."'") == NULL) {
						//	echo('<td><font color="red">WYŁĄCZONY</font></td>');
					//	} else {
					//		echo('<td><font color="green">URUCHOMIONY</font></td>');
					//	}
						echo('<td>
						<a href="administracjaON.php?info='.$linia["nazwamaszyny"].'" class="btn btn-xs btn-success">Włącz</a>
						<a href="administracjaRESTART.php?info='.$linia["nazwamaszyny"].'" class="btn btn-xs btn-info">Restart</a>
						<a href="administracjaOFF.php?info='.$linia["nazwamaszyny"].'" class="btn btn-xs btn-warning">Wyłacz</a>
						<a href="administracjaKlonuj.php?info='.$linia["nazwamaszyny"].'" class="btn btn-xs btn-info">Klonuj</a>
						<a href="administracjaSETT.php?info='.$linia["nazwamaszyny"].'" class="btn btn-xs btn-primary">Ustawienia</a>
						<a href="administracjaDEL.php?info='.$linia["nazwamaszyny"].'" class="btn btn-xs btn-danger">Usuń</a>
						</td>');
						echo('</tr>');
					}
					mysqli_close($connect);
				?>
				</table>
				</br></br>
				<a href="administracja4.php" class="btn btn-success" role="button">Dodaj nową maszynę wirtualną</a>
				<a href="administracjaIMPORT.php" class="btn btn-warning" role="button">Importuj maszynę</a>
				<a href="wyloguj.php" class="btn btn-info" role="button">Wyloguj</a>
			</div>
		</div>
		<div class="container">
			<div class="span4">
				© 2015 Jakub Biliński - All Rights Reserved
			</div>
		</div>
	</body>
</html>
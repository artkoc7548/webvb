<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'konfiguracja.php';
			if(!isset($_COOKIE['login']) && !isset($_COOKIE['haslo'])) {
				header("Location: wyloguj.php");
				die();
			}
			
			$sql = "SELECT id FROM ab_uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$_COOKIE['haslo']."'";
			
			$rezultat = mysqli_query($connect,$sql);
			while($data = mysqli_fetch_assoc($rezultat)) {
				$idUsera = $data['id'];
			}

			mysqli_close($connect);
		?>
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
				<li><a href="menu.php">Twoje Konto</a></li>
				<li class="active"><a href="maszyny.php">Twoje Maszyny</a></li>
				<li><a href="ustawienia.php">Ustawienia</a></li>
				<li><a href="wyloguj.php">Wyloguj</a></li>
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
					include 'konfiguracja.php';
					$connect = mysqli_connect('artkoc7548.mysql.dhosting.pl', 'xeid7h_koczwara', '_tyS7%Zi6K', 'che4zu_koczwara');
					
					$sqlm = "SELECT id, nazwamaszyny FROM ab_maszyny WHERE iduzytkownika=$idUsera";
					$lista = mysqli_query($connect,$sqlm) or die();

					while($linia = mysqli_fetch_assoc($lista)) {
						echo('<tr>');
						echo('<td>'.$linia["id"].'</td>');
						echo('<td>'.$linia["nazwamaszyny"].'</td>');
					//	if (exec("VBoxManage list runningvms | grep -w '".$linia["nazwamaszyny"]."'") == NULL) {
							echo('<td><font color="red">WYŁĄCZONY</font></td>');
					//	} else {
					//		echo('<td><font color="green">URUCHOMIONY</font></td>');
					//	}
						echo('<td>
						<a href="maszynyON.php?info='.$linia["nazwamaszyny"].'" class="btn btn-xs btn-success">Włącz</a>
						<a href="maszynyRESTART.php?info='.$linia["nazwamaszyny"].'" class="btn btn-xs btn-info">Restart</a>
						<a href="maszynyOFF.php?info='.$linia["nazwamaszyny"].'" class="btn btn-xs btn-warning">Wyłacz</a>
						<a href="maszynySETT.php?info='.$linia["nazwamaszyny"].'" class="btn btn-xs btn-primary">Ustawienia</a>
						</td>');
						echo('</tr>');
					}
					mysqli_close($connect);
				?>
				</table>
			</div>
		</div>
		<div class="container">
			<div class="span4">
				© 2015 Jakub Biliński - All Rights Reserved
			</div>
		</div>
	</body>
</html>
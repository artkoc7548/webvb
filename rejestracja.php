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
				<li class="active"><a href="rejestracja.php">Rejestracja</a></li>
				<li><a href="logowanie.php">Logowanie</a></li>
				<li><a href="administracja.php">Administracja</a></li>
			  </ul>
			</div>
		  </div>
		</div>
	</div>
		<div class="container">
			<div class="jumbotron">
				<h1>Rejestracja:</h1></br>
				<form action="rejestracja2.php" method="get">
					<div class="form-group">
						<label for="lgn">Login: </label> <input type="text" name="lgn"><br>
					</div>
					<div class="form-group">
						<label for="pwd">Haslo: </label> <input type="password" name="pwd"><br>
					</div>

					<?php
	include 'konfiguracja.php';
	
	$connect = mysqli_connect('artkoc7548.mysql.dhosting.pl', 'xeid7h_koczwara', '_tyS7%Zi6K', 'che4zu_koczwara');

	$sqlf="SELECT id, funkcja FROM ab_funkcje";
    
	$rezultat = mysqli_query($connect,$sqlf);
	
	echo "<h4>funkcje</h2><br>" ;
	echo "<form action='' method='POST'>";
	echo "<select name='id_kategoria' id='' >";

	while($data = mysqli_fetch_assoc($rezultat)){
		$funkcja = $data['funkcja'];
		$id = $data['id'];
		echo "<option value= $id > $funkcja </option>" ;
		};
	   echo "</select>";
	echo "</form>";


		$sqlk="SELECT id, klasa FROM ab_klasy";
    
		$rezultat = mysqli_query($connect,$sqlk);
		
		echo "<h4>klasy</h2><br>" ;
		echo "<form action='' method='POST'>";
		echo "<select name='id_kategoria' id='' >";
	
		while($data = mysqli_fetch_assoc($rezultat)){
			$klasa = $data['klasa'];
			$id = $data['id'];
			echo "<option value= $id > $klasa </option>" ;
			};
		   echo "</select>";
	   	echo "</form>";

	
?>

					<div class="form-group">
						<input type="submit" value="Zarejestruj się" class="btn btn-primary">
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
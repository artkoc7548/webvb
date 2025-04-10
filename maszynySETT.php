<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'konfiguracja.php';
		
			$sql = "SELECT id FROM uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$_COOKIE['haslo']."'";
			$rezultat = mysqli_query($connect,$sql);
			if(mysqli_num_rows($rezultat) != 1) {
				header("Location: wyloguj.php");
				die();
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
				<h1>Ustawienia maszyny:</h1>
				<form action="maszynySETT2.php" method="get">
				<div class="form-group">
					<label for="lgn">Nazwa Maszyny: </label> <br>
					<input type="text" name="nazwa" value="<?php echo($_GET["info"]); ?>" readonly><br>
				</div>
				
				<div class="form-group">
					<label for="lgn">Ilość RAM [MB]: </label>
					<select class="form-control" id="ram">
					<option>2048</option>
					<option>1024</option>
					<option>512</option>
					<option>256</option>
					<option>128</option>
					<option>4096</option>		
				  </select>
				</div>
			
				<div class="form-group">
					<label for="lgn">Karta jeden: </label>
					<select class="form-control" id="karta1">
					<option>bridged "lan"</option>
					<option>bridged "lab"</option>
					<option>intnet "lan1"</option>
					<option>intnet "lan2"</option>
					<option>intnet "lan3"</option>
					<option>nat</option>
					<option>none</option>
					<option>null</option>
				  </select>
				  <br>
				</div>
				<div class="form-group">
					<label for="lgn">Karta dwa: </label>
					<select class="form-control" id="karta2">
					<option>bridged "lan"</option>
					<option>bridged "lab"</option>
					<option>intnet "lan1"</option>
					<option>intnet "lan2"</option>
					<option>intnet "lan3"</option>
					<option>nat</option>
					<option>none</option>
					<option>null</option>
				  </select>
				  <br>
				</div>
				<div class="form-group">
					<label for="lgn">Karta trzy: </label>
					<select class="form-control" id="karta3">
					<option>bridged "lan"</option>
					<option>bridged "lab"</option>
					<option>intnet "lan1"</option>
					<option>intnet "lan2"</option>
					<option>intnet "lan3"</option>
					<option>nat</option>
					<option>none</option>
					<option>null</option>
				  </select>
				  <br>
				</div>
				<div class="form-group">
					<label for="lgn">Karta cztery: </label>
					<select class="form-control" id="karta4">
					<option>bridged "lan"</option>
					<option>bridged "lab"</option>
					<option>intnet "lan1"</option>
					<option>intnet "lan2"</option>
					<option>intnet "lan3"</option>
					<option>nat</option>
					<option>none</option>
					<option>null</option>
				  </select>
				  <br>
				</div>
				<div class="form-group">
					<label for="lgn">Pulpit zdalny port: </label><br> <input type="text" name="pulpitPort"><br>
				</div>
				
				<div class="form-group">
					<input type="submit" value="Wykonaj" class="btn btn-success">
					<a href="maszyny.php" class="btn btn-danger" role="button">Anuluj</a>
				</div>
				</form>
				<h6>Zmieione zostaną tyle te parametry, obok których pole nie jest puste.</h6>
			</div>
		</div>
		<div class="container">
			<div class="span4">
				© 2015 Jakub Biliński - All Rights Reserved
			</div>
		</div>
	</body>
</html>
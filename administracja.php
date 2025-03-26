<!DOCTYPE html>
<html lang="en">
	
		<?php
		include 'header.php';

			include 'konfiguracja.php';
			if(isset($_COOKIE['hasloROOT']) ||  $_COOKIE['hasloROOT'] == $prawidloweHaslo ) {
				header("Location: administracja3.php");
				die();
			}
			
		?>
	
	<body>
	<div class="navbar">
	<?php
        include 'menu.php';
    ?>
	</div>
		<div class="container">
			<div class="jumbotron">
				<h1>Podaj hasło:</h1>
				<form action="administracja2.php" method="get">
					<div class="form-group">
						<label for="pwd">Haslo: </label> <input type="password" name="pwd"><br>
					</div>
					<div class="form-group">
						<input type="submit" value="Zaloguj się" class="btn btn-danger">
					</div>
				</form>
			</div>
		</div>
		<div class="container">
				<?php
      			  include 'footer.php';
       			?>
		</div>
	</body>
</html>
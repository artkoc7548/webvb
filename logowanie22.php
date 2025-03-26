<!DOCTYPE html>
<html lang="en">


		<?php
			include 'konfiguracja.php';
			// mysql_connect($bazaAdres,$bazaLogin,$basaHaslo);
			// mysql_select_db($bazaNazwa);
			// $sql = "SELECT id FROM uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$_COOKIE['haslo']."'";
			// $rezultat = mysql_query($sql);
			// if(mysql_num_rows($rezultat) == 1) {
			// 	mysql_close();
			// 	header("Location: menu.php");
			// 	die();
			// }
			// mysql_close();
			include 'header.php';
		?>

	<body>
	<!-- <div class="navbar"> -->
	<!-- <?php
        include 'menu.php';
    ?> -->

	</div>
	<div class="space">

	</div>
		<div class="container">
			<div class="logowanie">
				<h1>Logowanie:</h1></br>
				<form action="logowanie2.php" method="post">
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
			<div class="rejestracja">
				<div class="col">
				<h1>Rejestracja:</h1>
				</div>
				<div class="col">
				<h3>Chce dołączyć, aby zarządzać swoimi usługami</h3>
				</div>
					<div class="form-group">
						<input type="submit" value="Utórz konto" class="btn btn-primary">
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
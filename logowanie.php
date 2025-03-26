<!DOCTYPE html>
<html lang="en">
	<?php
        include 'header.php';
    ?>
		
	<body>
	<header>
<div class=logo></div>

<div class=menu></div>

</header>
	
		<div class="container">
			<div class="login">
				<h1>Logowanie:</h1></br>
				<form action="logowanie2.php" method="get">
					<div class="form-group"><label for="lgn">Login: </label> <input type="text" name="lgn"></div>
					<div class="form-group"><label for="pwd">Haslo: </label> <input type="password" name="pwd"></div>
					<div class="form-group"><input type="submit" value="Zaloguj się" class="btn btn-primary"></div>
				</form>
			</div>
		</div>

	<?php
    	include 'footer.php';
    ?>
		</div>
	</body>
</html>
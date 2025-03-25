<!DOCTYPE html>
<html lang="en">
	<?php
        include 'header.php';
    ?>
	<body>
	<div class="navbar">
	<?php
        include 'menu.php';
    ?>
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
					<div class="form-group">
						<input type="submit" value="Zarejestruj się" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
		<div class="footer">
			<?php
     		  include 'footer.php';
     		  ?>
		</div>
	</body>
</html>
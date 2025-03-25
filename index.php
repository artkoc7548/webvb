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
				<h1>Witaj!</h1>
				<p>Projekt ten ma na celu odciążenie administratora serwera od zarządzania maszynami wirtualnymi i przekazać część obowiązków na osoby pracujące wirtualnymi maszynami. Na serwerze uruchomiony jest VirtualBox razem z określoną ilością maszyn wirtualnych, tymczasem na komputerach klienckich uruchomiona jest strona WWW do zarządzania ich serwerem, który został im przydzielony przez administratora. Możliwa jest praca na takiej maszynie wirtualnej za pomocą Zdalnego Pulpitu (tylko w przypadku odpowiedniej konfiguracji). Korzystanie z tej metody jest bardzo efektywne, ponieważ nie wymagana jest instalacja na każdym komputerze klienckim maszyny wirtualnej wraz z wybranym systemem operacyjnym, a dodatkowo pliki dostępne są z różnych komputerów bez potrzeby kopiowania plików odpowiedzialnych za maszyny wirtualne. Administrator posiada również całkowitą kontrolę nad tym co się dzieję na tych maszynach oraz może w dowolnym momencie odebrać użytkownikowi dostęp do danej maszyny wirtualnej. Zarządzanie serwerem jest bardzo proste i przejrzyste, co przyśpiesza pracę. System ten został zaprojektowany pod system Debian w wersji 7.8.0-i386, ale powinien działać na również innych systemach operacyjnych z rodziny Linux.</p>
				<a href="rejestracja.php" class="btn btn-large btn-success">Rozpocznij...</a>
		</div>
	</div>

	<div class="footer">
		<?php
        include 'footer.php';
        ?>
	</div>
</body>
</html>

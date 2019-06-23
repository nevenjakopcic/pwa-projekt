<footer class="page-footer font-small yellow">
	<div class="footer-copyright text-center py-3">
		<?php
			if(isset($_SESSION['$korisnicko_ime'])) {
				echo "Trenutni korisnik: ".$_SESSION['$korisnicko_ime']." | ";
			}
		?>
		Napravio: <a href="https://github.com/nevenjakopcic">Neven Jakopčić</a> 2019
	</div>
</footer>

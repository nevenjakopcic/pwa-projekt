<!doctype html>
<html lang="en-US">
<?php require_once "./head.php" ?>
<body id="unos">
	<?php require_once "./header.php" ?>
	<div class="mt-5 container">
		<form enctype="multipart/form-data" action="loginSkripta.php" method="POST" onsubmit="validacija()">

			<div class="form-item">
				<label for="korisnicko_ime">Korisničko ime</label>
				<div class="form-field">
					<input type="text" name="korisnicko_ime" id="korisnicko_ime" class="form-field-textual">
				</div>
				<span id="porukaKorisnickoIme" class="bojaPoruke"></span>
			</div>
			
			<div class="form-item">
				<label for="lozinka">Lozinka</label>
				<div class="form-field">
					<input type="password" name="lozinka" id="lozinka" class="form-field-textual">
				</div>
				<span id="porukaLozinka" class="bojaPoruke"></span>
			</div>
			
			<div class="form-item">
				<button type="submit" id="slanje" value="Prihvati">Login</button>
			</div>
		</form>
	</div>

	<script type="text/javascript">
		function validacija() {
			// Korisničko ime mora biti uneseno
			var poljeKorisnickoIme = document.getElementById("korisnicko_ime");
			var korisnicko_ime = poljeKorisnickoIme.value;
			if (korisnicko_ime.length== 0) {
				poljeKorisnickoIme.style.border="1px dashed red";
				document.getElementById("porukaKorisnickoIme").innerHTML="Korisničko ime mora biti uneseno!<br>";
				event.preventDefault();
				return false;
			} else {
				poljeKorisnickoIme.style.border="1px solid green";
				document.getElementById("porukaKorisnickoIme").innerHTML="";
			}

			// Lozinka mora biti unesena
			var poljeLozinka = document.getElementById("lozinka");
			var lozinka = poljeLozinka.value;
			if (lozinka.length== 0) {
				poljeLozinka.style.border="1px dashed red";
				document.getElementById("porukaLozinka").innerHTML="Lozinka mora biti unesena!<br>";
				event.preventDefault();
				return false;
			} else {
				poljeLozinka.style.border="1px solid green";
				document.getElementById("porukaLozinka").innerHTML="";
			}

			return true;
		};
	</script>
</body>
</html>

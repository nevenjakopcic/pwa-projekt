<!doctype html>
<html lang="en-US">
<?php require_once "./head.php" ?>
<body id="unos">
	<?php require_once "./header.php" ?>
	<div class="mt-5 container">
		<form enctype="multipart/form-data" action="loginSkripta.php" method="POST">

			<div class="form-item">
				<label for="ime">Ime</label>
				<div class="form-field">
					<input type="text" name="ime" id="ime" class="form-field-textual">
				</div>
				<span id="porukaIme" class="bojaPoruke"></span>
			</div>

			<div class="form-item">
				<label for="prezime">Prezime</label>
				<div class="form-field">
					<input type="text" name="prezime" id="prezime" class="form-field-textual">
				</div>
				<span id="porukaPrezime" class="bojaPoruke"></span>
			</div>
			
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
			</div>
			
			<div class="form-item">
				<label for="lozinka2">Ponovljena lozinka</label>
				<div class="form-field">
					<input type="password" name="lozinka2" id="lozinka2" class="form-field-textual">
				</div>
				<span id="porukaLozinka" class="bojaPoruke"></span>
			</div>
			
			<div class="form-item">
				<label>Admin:
					<div class="form-field">
						<input type="checkbox" id="admin" name="admin">
					</div>
				</label>
			</div>

			<div class="form-item">
				<button type="reset" value="Poništi">Poništi</button>
				<button type="submit" id="slanje" value="Prihvati">Prihvati</button>
			</div>
		</form>
	</div>

	<script type="text/javascript">
		document.getElementById("slanje").onclick = function(event) {
			var slanjeForme = true;

			// Ime mora biti uneseno
			var poljeIme = document.getElementById("ime");
			var ime = poljeIme.value;
			if (ime.length== 0) {
				slanjeForme = false;
				poljeIme.style.border="1px dashed red";
				document.getElementById("porukaIme").innerHTML="Ime mora biti uneseno!<br>";
			} else {
				poljeContent.style.border="1px solid green";
				document.getElementById("porukaIme").innerHTML="";
			}

			// Prezime mora biti uneseno
			var poljePrezime = document.getElementById("prezime");
			var prezime = poljePrezime.value;
			if (prezime.length== 0) {
				slanjeForme = false;
				poljePrezime.style.border="1px dashed red";
				document.getElementById("porukaPrezime").innerHTML="Prezime mora biti uneseno!<br>";
			} else {
				poljePrezime.style.border="1px solid green";
				document.getElementById("porukaPrezime").innerHTML="";
			}

			// Korisničko ime mora biti uneseno
			var poljeKorisnickoIme = document.getElementById("korisnicko_ime");
			var korisnicko_ime = poljeKorisnickoIme.value;
			if (korisnicko_ime.length== 0) {
				slanjeForme = false;
				poljeKorisnickoIme.style.border="1px dashed red";
				document.getElementById("porukaKorisnickoIme").innerHTML="Korisničko ime mora biti uneseno!<br>";
			} else {
				poljeKorisnickoIme.style.border="1px solid green";
				document.getElementById("porukaKorisnickoIme").innerHTML="";
			}

			// Lozinke moraju biti iste
			var poljeLozinka = document.getElementById("lozinka");
			var lozinka = poljeLozinka.value;
			var poljeLozinka2 = document.getElementById("lozinka2");
			var lozinka2 = poljeLozinka2.value;
			if (lozinka.length== 0) {
				slanjeForme = false;
				poljeLozinka.style.border="1px dashed red";
				poljeLozinka2.style.border="1px dashed red";
				document.getElementById("porukaLozinka").innerHTML="Lozinka mora biti unesena!";
			} else if (lozinka !== lozinka2) {
				slanjeForme = false;
				poljeLozinka.style.border="1px dashed red";
				poljeLozinka2.style.border="1px dashed red";
				document.getElementById("porukaLozinka").innerHTML="Lozinke moraju biti jednake!";
			} else {
				poljeLozinka.style.border="1px solid green";
				poljeLozinka2.style.border="1px solid green";
				document.getElementById("porukaLozinka").innerHTML="";
			}

			if (slanjeForme == false) {
				event.preventDefault();
			}
		};
	</script>
</body>
</html>

<!doctype html>
<html lang="en-US">
<?php require_once "./head.php" ?>
<body id="registracija">
	<?php require_once "./header.php" ?>
	<div class="my-5 container">
		<h1>Registracija</h1>
		<form enctype="multipart/form-data" action="registracijaSkripta.php" method="POST" onsubmit="validacija()">

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
				<span id="porukaKorisnickoIme" class="bojaPoruke">
					<?php
						if (isset($_POST['msg']) && $_POST['msg'] == 1) {
							echo "Korisničko ime je već zauzeto!";
						}
					?>
				</span>
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
						<input type="checkbox" id="razina" name="razina">
					</div>
				</label>
			</div>

			<div class="form-item">
				<button type="reset" value="Poništi">Poništi</button>
				<button type="submit" id="slanje" value="Prihvati">Prihvati</button>
			</div>
		</form>
	</div>
	<?php include_once "./footer.php"?>

	<script type="text/javascript">
		function validacija() {

			// Ime mora biti uneseno
			var poljeIme = document.getElementById("ime");
			var ime = poljeIme.value;
			if (ime.length== 0) {
				poljeIme.style.border="1px dashed red";
				document.getElementById("porukaIme").innerHTML="Ime mora biti uneseno!<br>";
				event.preventDefault();
				return false;
			} else {
				poljeIme.style.border="1px solid green";
				document.getElementById("porukaIme").innerHTML="";
			}

			// Prezime mora biti uneseno
			var poljePrezime = document.getElementById("prezime");
			var prezime = poljePrezime.value;
			if (prezime.length== 0) {
				poljePrezime.style.border="1px dashed red";
				document.getElementById("porukaPrezime").innerHTML="Prezime mora biti uneseno!<br>";
				event.preventDefault();
				return false;
			} else {
				poljePrezime.style.border="1px solid green";
				document.getElementById("porukaPrezime").innerHTML="";
			}

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

			// Lozinke moraju biti iste
			var poljeLozinka = document.getElementById("lozinka");
			var lozinka = poljeLozinka.value;
			var poljeLozinka2 = document.getElementById("lozinka2");
			var lozinka2 = poljeLozinka2.value;
			if (lozinka.length== 0) {
				poljeLozinka.style.border="1px dashed red";
				poljeLozinka2.style.border="1px dashed red";
				document.getElementById("porukaLozinka").innerHTML="Lozinka mora biti unesena!";
				event.preventDefault();
				return false;
			} else if (lozinka !== lozinka2) {
				poljeLozinka.style.border="1px dashed red";
				poljeLozinka2.style.border="1px dashed red";
				document.getElementById("porukaLozinka").innerHTML="Lozinke moraju biti jednake!";
				event.preventDefault();
				return false;
			} else {
				poljeLozinka.style.border="1px solid green";
				poljeLozinka2.style.border="1px solid green";
				document.getElementById("porukaLozinka").innerHTML="";
			}

			return true;
		};
	</script>
</body>
</html>

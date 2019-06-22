<!doctype html>
<html lang="en-US">
<?php require_once "./head.php" ?>
<body id="unos">
	<?php require_once "./header.php" ?>
	<div class="mt-5 container">
		<form enctype="multipart/form-data" action="skripta.php" method="POST">
			<div class="form-item">
				<label for="title">Naslov vijesti</label>
				<div class="form-field">
					<input type="text" name="title" id="title" class="form-field-textual">
				</div>
				<span id="porukaTitle" class="bojaPoruke"></span>
			</div>
			
			<div class="form-item">
				<label for="content">Sadržaj vijesti</label>
				<div class="form-field">
					<textarea name="content" id="content" cols="30" rows="10" class="form-field-textual"></textarea>
				</div>
				<span id="porukaContent" class="bojaPoruke"></span>
			</div>

			<div class="form-item">
				<label for="picture">Slika: </label>
				<div class="form-field">
					<input type="file" accept="image/jpg,image/gif,image/png" id="picture" class="input-text" name="picture"/>
				</div>
				<span id="porukaSlika" class="bojaPoruke"></span>
			</div>

			<div class="form-item">
				<label for="category">Kategorija vijesti</label>
				<div class="form-field">
					<select name="category" id="category" class="form-field-textual">
						<option value="" disabled selected>---</option>
						<option value="vijesti">Vijesti</option>
						<option value="muzika">Muzika</option>
						<option value="sport">Sport</option>
					</select>
				</div>
				<span id="porukaKategorija" class="bojaPoruke"></span>
			</div>

			<div class="form-item">
				<label>Spremiti u arhivu:
					<div class="form-field">
						<input type="checkbox" id="archive" name="archive">
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

			var poljeTitle = document.getElementById("title");
			var title = poljeTitle.value;
			if (title.length < 5 || title.length > 30) {
				slanjeForme = false;
				poljeTitle.style.border="1px dashed red";
				document.getElementById("porukaTitle").innerHTML = 
					"Naslov vijesti mora imati između 5 i 30 znakova!<br>";
			} else {
				poljeTitle.style.border="1px solid green";
				document.getElementById("porukaTitle").innerHTML="";
			}

			// Sadržaj mora biti unesen
			var poljeContent = document.getElementById("content");
			var content = poljeContent.value;
			if (content.length== 0) {
				slanjeForme = false;
				poljeContent.style.border="1px dashed red";
				document.getElementById("porukaContent").innerHTML="Sadržaj mora biti unesen!<br>";
			} else {
				poljeContent.style.border="1px solid green";
				document.getElementById("porukaContent").innerHTML="";
			}

			// Slika mora biti unesena
			var poljeSlika = document.getElementById("picture");
			var picture = poljeSlika.value;
			if (picture.length == 0) {
				slanjeForme = false;
				poljeSlika.style.border="1px dashed red";
				document.getElementById("porukaSlika").innerHTML = 
					"Slika mora biti unesena!<br>";
			} else {
				poljeSlika.style.border = "1px solid green";
				document.getElementById("porukaSlika").innerHTML="";
			}
			
			// Kategorija mora biti unesena
			var poljeCategory = document.getElementById("category");
			if (poljeCategory.selectedIndex == 0) {
				slanjeForme = false;
				poljeCategory.style.border = "1px dashed red";
				document.getElementById("porukaKategorija").innerHTML =
					"Kategorija mora biti odabrana!<br>";
			} else {
				poljeCategory.style.border = "1px solid green";
				document.getElementById("porukaKategorija").innerHTML = "";
			}

			if (slanjeForme == false) {
				event.preventDefault();
			}
		};
	</script>
</body>
</html>

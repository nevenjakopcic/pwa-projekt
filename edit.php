<!doctype html>
<html lang="en-US">
<?php require_once "./head.php" ?>
<body id="unos">
	<?php require_once "./header.php" ?>
	<?php require_once "./connect.php" ?>
	<?php
	$sql = "SELECT naslov, tekst, kategorija, arhiva FROM clanak where id = ?";
	$id = $_GET['id'];
	$stmt = mysqli_stmt_init($dbc);
	if (mysqli_stmt_prepare($stmt, $sql)) {
		mysqli_stmt_bind_param($stmt, 'i', $id);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
	}
	if (mysqli_stmt_num_rows($stmt) == 0) {
		header("Location: index.php");
	}
	mysqli_stmt_bind_result($stmt, $naslov, $tekst, $kategorija, $arhiva);
	mysqli_stmt_fetch($stmt);
	mysqli_close($dbc);
	?>
	<div class="my-5 container">
		<h1>Editanje postojeće vijesti</h1>
		<form enctype="multipart/form-data" action="editSkripta.php?id=<?php echo $id;?>" method="POST">
			<div class="form-item">
				<label for="title">Naslov vijesti</label>
				<div class="form-field">
				<input type="text" name="title" id="title" class="form-field-textual" value="<?php echo $naslov;?>"></input>
				</div>
				<span id="porukaTitle" class="bojaPoruke"></span>
			</div>
			
			<div class="form-item">
				<label for="content">Sadržaj vijesti</label>
				<div class="form-field">
				<textarea name="content" id="content" cols="30" rows="10" class="form-field-textual"><?php echo $tekst; ?></textarea>
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
						<option value="vijesti" <?php if($kategorija == "vijesti") echo "selected";?>>Vijesti</option>
						<option value="muzika" <?php if($kategorija == "muzika") echo "selected";?>>Muzika</option>
						<option value="sport" <?php if($kategorija == "sport") echo "selected";?>>Sport</option>
					</select>
				</div>
				<span id="porukaKategorija" class="bojaPoruke"></span>
			</div>

			<div class="form-item">
				<label>Spremiti u arhivu:
					<div class="form-field">
					<input type="checkbox" id="archive" name="archive" value="<?php echo $arhiva;?>">
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

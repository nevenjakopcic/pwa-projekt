<!doctype html>
<html lang="en-US">
<?php require_once "./head.php" ?>
<body id="unos">
	<?php require_once "./header.php" ?>
	<form enctype="multipart/form-data" action="skripta.php" method="POST">
		<div class="form-item">
			<label for="title">Naslov vijesti</label>
			<div class="form-field">
				<input type="text" name="title" class="form-field-textual">
			</div>
		</div>
		
		<div class="form-item">
			<label for="content">Sadržaj vijesti</label>
			<div class="form-field">
				<textarea name="content" id="" cols="30" rows="10" class="form-field-textual"></textarea>
			</div>
		</div>

		<div class="form-item">
			<label for="picture">Slika: </label>
			<div class="form-field">
				<input type="file" accept="image/jpg,image/gif,image/png" class="input-text" name="picture"/>
			</div>
		</div>

		<div class="form-item">
			<label for="category">Kategorija vijesti</label>
			<div class="form-field">
				<select name="category" id="" class="form-field-textual">
					<option value="vijesti">Vijesti</option>
					<option value="muzika">Muzika</option>
					<option value="sport">Sport</option>
				</select>
			</div>
		</div>

		<div class="form-item">
			<label>Spremiti u arhivu:
				<div class="form-field">
					<input type="checkbox" name="archive">
				</div>
			</label>
		</div>

		<div class="form-item">
			<button type="reset" value="Poništi">Poništi</button>
			<button type="submit" value="Prihvati">Prihvati</button>
		</div>
	</form>
</body>
</html>

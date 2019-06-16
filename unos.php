<form action="skripta.php" method="POST">
	<div class="form-item">
		<label for="title">Naslov vijesti</label>
		<div class="form-field">
			<input type="text" name="title" class="form-field-textual">
		</div>
	</div>
	
	<div class="form-item">
		<label for="about">Kratki sadržaj vijesti (do 50 znakova)</label>
		<div class="form-field">
			<textarea name="about" id="" cols="30" rows="10" class="form-field-textual"></textarea>
		</div>
	</div>

	<div class="form-item">
		<label for="content">Sadržaj vijesti</label>
		<div class="form-field">
			<textarea name="content" id="" cols="30" rows="10" class="form-field-textual"></textarea>
		</div>
	</div>

	<div class="form-item">
		<label for="photo">Slika: </label>
		<div class="form-field">
			<input type="file" accept="image/jpg,image/gif,image/png" class="input-text" name="photo"/>
		</div>
	</div>

	<div class="form-item">
		<label for="category">Kategorija vijesti</label>
		<div class="form-field">
			<select name="category" id="" class="form-field-textual">
				<option value="vijesti">Vijesti</option>
				<option value="muzika">Muzika</option>
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

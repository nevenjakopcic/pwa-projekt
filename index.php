<!doctype html>
<html lang="en-US">
<?php require_once "./head.php" ?>
<?php include_once "./clanciQuery.php" ?>
<body id="home">
	<?php require_once "./header.php" ?>
	<div class="mt-5 container">
		<h3>Vijesti</h3>
		<div class="row">
			<?php
				$query = "SELECT * from clanak WHERE arhiva=0 AND kategorija='vijesti' ORDER BY id DESC LIMIT 3";
				clanciQuery($query);
			?>
		</div>

		<h3>Muzika</h3>
		<div class="row">
			<?php
				$query = "SELECT * from clanak WHERE arhiva=0 AND kategorija='muzika' ORDER BY id DESC LIMIT 3";
				clanciQuery($query);
			?>
		</div>

		<h3>Sport</h3>
		<div class="row">
			<?php
				$query = "SELECT * from clanak WHERE arhiva=0 AND kategorija='sport' ORDER BY id DESC LIMIT 3";
				clanciQuery($query);
			?>
		</div>
	</div>
</body>
</html>

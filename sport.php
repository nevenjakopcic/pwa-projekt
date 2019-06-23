<!doctype html>
<html lang="en-US">
<?php require_once "./head.php" ?>
<?php include_once "./clanciQuery.php" ?>
<body id="sport">
	<?php require_once "./header.php" ?>
	<div class="my-5 container">
		<div class="row">
			<?php
				$query = "SELECT * from clanak WHERE arhiva=0 AND kategorija='sport' ORDER BY id DESC";
				clanciQuery($query);
			?>
		</div>
	</div>
	<?php include_once "./footer.php" ?>
</body>
</html>


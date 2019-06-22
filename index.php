<!doctype html>
<html lang="en-US">
<?php require_once "./head.php" ?>
<?php include_once "./clanciQuery.php" ?>
<body id="home">
	<?php require_once "./header.php" ?>
	<section class="vijesti">
	<?php
		$query = "SELECT * from clanak WHERE arhiva=0 AND kategorija='vijesti' LIMIT 4";
		clanciQuery($query);
		?>
</body>
</html>

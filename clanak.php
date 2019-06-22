<!doctype html>
<html lang="en-US">
<?php require_once "./head.php" ?>
<?php include_once "./clanciQuery.php" ?>
<body>
	<?php require_once "./header.php" ?>
	<div class="container">
	<?php
		$query = "SELECT * from clanak WHERE id=".$_GET['id']." LIMIT 1";
		clanakQuery($query);
	?>
	</div>
</body>
</html>

<?php
function clanciQuery($query) {
	require_once "./connect.php";
	define('URLPATH', 'images/');
	$result = mysqli_query($dbc, $query);
	while ($row = mysqli_fetch_array($result)) {
		echo '<article>';
		echo '<img src="'.URLPATH.$row['slika'].'"';
		echo '<h4><a href="clanak.php?id='.$row['id'].'">';
		echo $row['naslov'];
		echo '</a></h4>';
		echo '</article>';
	}
	$dbc->close();
}?>

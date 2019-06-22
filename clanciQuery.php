<?php
function clanciQuery($query) {
	require_once "./connect.php";
	define('URLPATH', 'images/');
	$result = mysqli_query($dbc, $query);
	while ($row = mysqli_fetch_array($result)) {
		$url = "clanak.php?id=".$row['id'];
		echo '<a href="clanak.php?id='.$row['id'].'">';
		echo '<img src="'.URLPATH.$row['slika'].'"';
		echo '<h2>';
		echo $row['naslov'];
		echo '</h2></a>';
		echo '<h3>'.$row['datum'].'</h3>';
	}
	$dbc->close();
}

function clanakQuery($query) {
	require_once "./connect.php";
	define('URLPATH', 'images/');
	$result = mysqli_query($dbc, $query);
	while ($row = mysqli_fetch_array($result)) {
		echo '<img src="'.URLPATH.$row['slika'].'"';
		echo '<h2>';
		echo $row['naslov'];
		echo '</h2>';
		echo '<h3>'.$row['datum'].'</h3>';
		echo '<p>'.$row['tekst'].'</p>';
	}
	$dbc->close();
}?>

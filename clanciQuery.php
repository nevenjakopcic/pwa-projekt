<?php
define('URLPATH', 'images/');

function clanciQuery($query) {
	require "./connect.php";
	$result = mysqli_query($dbc, $query);
	while ($row = mysqli_fetch_array($result)) {
		$url = "clanak.php?id=".$row['id'];
		echo '<article class="col-sm-4">';
		echo '<a href="clanak.php?id='.$row['id'].'">';
		echo '<img src="'.URLPATH.$row['slika'].'"';
		echo '<h2>';
		echo $row['naslov'];
		echo '</h2></a>';
		echo '<p>'.$row['datum'].'</p>';
		if (isset($_SESSION['$razina']) && $_SESSION['$razina'] == 1) {
			echo '<a class="tipkica" href="edit.php?id='.$row['id'].'">Edit </a>';
			echo '<a class="tipkica" href="delete.php?id='.$row['id'].'">Delete</a>';
		}
		echo '</article>';
	}
	$dbc->close();
}

function clanakQuery($query) {
	require "./connect.php";
	$result = mysqli_query($dbc, $query);
	while ($row = mysqli_fetch_array($result)) {
		echo '<img src="'.URLPATH.$row['slika'].'"';
		echo '<br>';
		echo '<h2>';
		echo $row['naslov'];
		echo '</h2>';
		echo '<h3>'.$row['datum'].'</h3>';
		echo '<p>'.$row['tekst'].'</p>';
	}
	$dbc->close();
}?>

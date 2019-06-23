<?php
require_once 'connect.php';

$id = $_GET['id'];
$title=$_POST['title'];
$category=$_POST['category'];
$content=$_POST['content'];
if (isset($_POST['archive'])) {
	$archive=1;
} else {
	$archive=0;
}

if (isset($_FILES['picture']['name']) && $_FILES['picture']['name'] != "") {
	$picture = $_FILES['picture']['name'];
	$target_dir = 'images/'.$picture;
	move_uploaded_file($_FILES["picture"]["tmp_name"], $target_dir);

	$sql = "UPDATE clanak SET naslov = ?, tekst = ?, slika = ?, kategorija = ?, arhiva = ? WHERE id = ?";
	$stmt = mysqli_stmt_init($dbc);
	if (mysqli_stmt_prepare($stmt, $sql)) {
		mysqli_stmt_bind_param($stmt, 'ssssii', $title, $content, $picture, $category, $archive, $id);
		mysqli_stmt_execute($stmt);
	}
} else {
	$sql = "UPDATE clanak SET naslov = ?, tekst = ?, kategorija = ?, arhiva = ? WHERE id = ?";
	$stmt = mysqli_stmt_init($dbc);
	if (mysqli_stmt_prepare($stmt, $sql)) {
		mysqli_stmt_bind_param($stmt, 'sssii', $title, $content, $category, $archive, $id);
		mysqli_stmt_execute($stmt);
	}
}
mysqli_close($dbc);

$url = "clanak.php?id=$id";
header("Location: $url");
?>

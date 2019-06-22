<?php
require_once 'connect.php';

$title=$_POST['title'];
$category=$_POST['category'];
$picture = $_FILES['picture']['name'];
$about=$_POST['about'];
$content=$_POST['content'];
if (isset($_POST['archive'])) {
	$archive=1;
} else {
	$archive=0;
}

$target_dir = 'images/'.$picture;
move_uploaded_file($_FILES["picture"]["tmp_name"], $target_dir);

$query = "INSERT INTO clanak (naslov, sazetak, tekst, slika, kategorija, arhiva)
	VALUES ('$title', '$about', '$content', '$picture', '$category', '$archive')";

$result = mysqli_query($dbc, $query) or die('Error querying database.');
$id = $dbc->insert_id;
mysqli_close($dbc);

$url = "clanak.php?id=$id";
header("Location: $url");
?>

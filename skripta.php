<?php
require_once 'connect.php';

$title=$_POST['title'];
$category=$_POST['category'];
$picture = $_FILES['picture']['name'];
$content=$_POST['content'];
if (isset($_POST['archive'])) {
	$archive=1;
} else {
	$archive=0;
}

$target_dir = 'images/'.$picture;
move_uploaded_file($_FILES["picture"]["tmp_name"], $target_dir);


$sql = "INSERT INTO clanak (naslov, tekst, slika, kategorija, arhiva) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($dbc);
if (mysqli_stmt_prepare($stmt, $sql)) {
	mysqli_stmt_bind_param($stmt, 'ssssd', $title, $content, $picture, $category, $archive);
	mysqli_stmt_execute($stmt);
}
$id = $dbc->insert_id;
mysqli_close($dbc);

$url = "clanak.php?id=$id";
header("Location: $url");
?>

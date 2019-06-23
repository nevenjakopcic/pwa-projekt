<?php
require_once "connect.php";
$id = $_GET['id'];

$sql = "DELETE FROM clanak WHERE id = ?";
$stmt = mysqli_stmt_init($dbc);
if (mysqli_stmt_prepare($stmt, $sql)) {
	mysqli_stmt_bind_param($stmt, 's', $id);
	mysqli_stmt_execute($stmt);
	mysqli_close($dbc);
}
header("Location: index.php");
?>

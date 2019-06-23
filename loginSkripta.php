<?php
require_once "connect.php";

session_start();
session_unset();
session_destroy();

$korisnicko_ime = $_POST['korisnicko_ime'];
$lozinka = $_POST['lozinka'];

$sql = "SELECT korisnicko_ime, lozinka, razina FROM korisnik WHERE korisnicko_ime = ?";
$stmt = mysqli_stmt_init($dbc);
if (mysqli_stmt_prepare($stmt, $sql)) {
	mysqli_stmt_bind_param($stmt, 's', $korisnicko_ime);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
}
if (mysqli_stmt_num_rows($stmt) == 0) {
	header("Location: login.php");
}
mysqli_stmt_bind_result($stmt, $kime_iz_baze, $lozinka_iz_baze, $razina);
mysqli_stmt_fetch($stmt);
mysqli_close($dbc);

if (password_verify($lozinka, $lozinka_iz_baze)) {
	session_start();
	$_SESSION['$korisnicko_ime'] = $korisnicko_ime;
	$_SESSION['$razina'] = $razina;
	header("Location: index.php");
} else {
	header("Location: login.php");
}


?>

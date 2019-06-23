<?php
require_once "connect.php";

session_start();
session_unset();
session_destroy();

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$korisnicko_ime = $_POST['korisnicko_ime'];
$lozinka = $_POST['lozinka'];
$hashed_password = password_hash($lozinka, CRYPT_BLOWFISH);
if (isset($_POST['razina'])) {
	$razina = 1;
} else {
	$razina = 0;
}

$sql = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = ?";
$stmt = mysqli_stmt_init($dbc);
if (mysqli_stmt_prepare($stmt, $sql)) {
	mysqli_stmt_bind_param($stmt, 's', $korisnicko_ime);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
}
if (mysqli_stmt_num_rows($stmt) > 0) {
	$_POST['msg'] = 1;
	header("Location: registracija.php");
} else {
	$sql = "INSERT INTO korisnik (ime, prezime, korisnicko_ime, lozinka, razina) VALUES (?, ?, ?, ?, ?)";
	$stmt = mysqli_stmt_init($dbc);
	if (mysqli_stmt_prepare($stmt, $sql)) {
		mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $korisnicko_ime, $hashed_password, $razina);
		mysqli_stmt_execute($stmt);
	}
}
mysqli_close($dbc);
session_start();
$_SESSION['$korisnicko_ime'] = $korisnicko_ime;
$_SESSION['$razina'] = $razina;
header("Location: index.php");

?>

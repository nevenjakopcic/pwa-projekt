<?php session_start();?>
<header class="pozadina1">
	<nav class="container">
		<a href="index.php" class="logo"></a>
		<ul>
			<li class="home"><a href="index.php">Home</a></li>
			<li class="vijesti"><a href="vijesti.php">Vijesti</a></li>
			<li class="muzika"><a href="muzika.php">Muzika</a></li>
			<li class="sport"><a href="sport.php">Sport</a></li>
			<?php
			if (isset($_SESSION['$korisnicko_ime'])) {
				echo '<li class="logout"><a href="logout.php">Logout</a></li>';
			} else {
				echo '<li class="login"><a href="login.php">Login</a></li>';
				echo '<li class="registracija"><a href="registracija.php">Registracija</a></li>';
			}
			?>
		</ul>
	</nav>
</header>

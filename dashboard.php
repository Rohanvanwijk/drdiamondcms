<?php
session_start();
if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'] == false)) {
	header("location: admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/global.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body class="container">
	<nav class="navbar navbar-dark bg-dark">
		<h1>Dashboard, Dr. Diamond</h1>
		<a href="logout.php"><button class="btn btn-success">log out</button></a>
	</nav>
	<article class="jumbotron">
		<h3>Totaal aantal Dr. Diamond gebruikers:</h3>
		<span class="badge badge-success" id="outputLevels"><?php echo $_SESSION['aantalgamegebruikers']; ?></span>
			<section class="form-group">
				<h3>Aantal levels</h3>
				<span class="badge badge-success" id="outputLevels"><?php echo $_SESSION['aantal_levels'] ?></span>
				<small>Wijzig hier het aantal levels dat een gebruiker moet doorlopen om het spel te voltooien.</small> <br>
				<input type="number" name="aantal_levels" id="aantal_levels">
				<input type="submit" class="btn btn-primary" id="btn-level" value="Wijzig"></input>
			</section>
			<section class="form-group">
				<h3>Maximaal aantal score</h3>
				<span class="badge badge-success" id="outputLevels"><?php echo $_SESSION['max_score']; ?></span>
				<small>Wijzig hier het maximaal score om een level te voltooien.</small> <br>
				<input type="number" name="aantal_levels" id="aantal_levels">
				<input type="submit" class="btn btn-primary" id="btn-level" value="Wijzig"></input>
			</section>
			<section class="form-group">
				<h3>Bedrag donatie</h3>
				<span class="badge badge-success" id="outputDonatie"><?php echo $_SESSION['bedrag_don']; ?></span>
				<small>Wijzig hier het bedrag van de donaties in Euro.</small> <br>
				<input type="number" name="bedrag_don" id="inputDonatie">
				<button type="submit" class="btn btn-primary" id="btn-donatie">Wijzig</button>
			</section>

			<form action="wijzigwachtwoord.php" method="post">
			<section class="form-group">
				<h3>Wijzig admin wachtwoord</h3>
				<span class="badge badge-danger"><?php if (isset($_SESSION['passmessage'])) {
					echo $_SESSION['passmessage'];
				} ?></span><br>
				<span>Oud wachtwoord</span>
				<input type="password" name="oldpassword" id="inputDonatie" class="form-control"> <br>
				<span>Nieuw wachtwoord</span>
				<input type="password" class="form-control" name="newpass1"> <br>
				<span>Herhaal wachtwoord</span>
				<input type="password" class="form-control" name="newpass2"> <br>
				<button type="submit" class="btn btn-primary" id="btn-donatie">Wijzig</button>
			</section>
		</form>
	</article>

</body>
</html>

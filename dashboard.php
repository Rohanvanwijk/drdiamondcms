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
			<section class="form-group">
				<h3>Aantal levels</h3>
				<span class="badge badge-success" id="outputLevels"><?php echo $_SESSION['aantal_levels'] ?></span>
				<small>Wijzig hier het aantal levels dat een gebruiker moet doorlopen om het spel te voltooien.</small> <br>
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

	</article>

</body>
</html>

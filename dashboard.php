<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="ajax.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body class="container">
	<nav class="navbar navbar-dark bg-dark">
		<h1>Dashboard, Dr. Diamond</h1>
		<button class="btn btn-success">log out</button>
	</nav>


	<article class="jumbotron">
		<form action="update.php" method="post" name="gamesettings">
			

			<section class="form-group">
				<h3>Aantal levels</h3>
				<span class="badge badge-success"><?php echo $_SESSION['aantal_levels']; ?></span>
				<small>Wijzig hier het aantal levels dat een gebruiker moet doorlopen om het spel te voltooien.</small> <br>
				<input type="number" name="aantal_levels">
				<button type="submit" class="btn btn-primary" id="btn-level">Wijzig</button>
			</section>
			<section class="form-group">
				<h3>Bedrag donatie</h3>
				<span class="badge badge-success"><?php echo $_SESSION['bedrag_don']; ?></span>
				<small>Wijzig hier het bedrag van de donaties in Euro.</small> <br>
				<input type="number" name="bedrag_don">
				<button type="submit" class="btn btn-primary">Wijzig</button>
			</section>
		</form>
	</article>
	
</body>
</html>
<?php
session_start();
if(isset($_SESSION['loggedin'])) {
	if ($_SESSION['loggedin'] == true) {
		header("location: dashboard.php");
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dr. Diamond admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body class="text-center">
	<article class="container">
		<article class="jumbotron">
			<h1>Admin login</h1>
			<tt>Standaard is admin@admin</tt>
			<?php


			if (isset($_SESSION['message'])) {
				if ($_SESSION['message'] != '') {
					echo "<div class='alert alert-danger' role='alert'>" . $_SESSION['message'] . "</div>";
				}
			}

			?>
			<form action="login.php" method="POST" class="form-signin">
				<section class="form-group">

					<input type="text" name="username" class="form-control" placeholder="Username" required="true" autofocus="true">
				</section>
				<section class="form-group">

					<input type="password" name="password" class="form-control" placeholder="Password" required="true">
				</section>
				<button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
			</form>
		</article>
	</article>


</body>
</html>

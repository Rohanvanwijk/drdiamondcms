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
			<form action="login.php" method="post" class="form-signin">
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
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" href="css/login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="login">
				<form action="verifierLogin.php" method="post">
					<label for="chk">Se connecter</label>
					<input type="email" name="email" placeholder="Adresse mail" required="">
					<input type="password" name="pswd" placeholder="Mot de passe" required="">
					<button type="submit" name="login">Se connecter</button>
				</form>
			</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ANCFCC Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<section>
	<div class="box">
	<form action="includes/login.script.php" method="post">
		<h1 class="titre">Login</h1>
		<div>
			<input type="text" id="uid" name="uid" placeholder="Username" /> 
		</div>
		<div>
			<input type="password" id="pwd" name="pwd" placeholder="Password" />
		</div>
		<button type="submit" name="submitlogin">Sign in</button>
		<div class="error">
			<t name="errormsg"><?php if(isset($_GET['error'])) echo('Username/Mot de passe incorrect') ?></t>
		</div>
	</form >
	</div>
</section>
</body>
</html>
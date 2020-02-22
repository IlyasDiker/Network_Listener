<!DOCTYPE html>
<html>
<head>
	<title>Network Listener</title>
	<link rel="stylesheet" href="header.css">
</head>
<body>
	<header>
		<div class="header">
			<div>
				<h1>Device List</h1>
				<p>See all devices on the network</p>
			</div>
			<div>
				<a href="mailto:sysadmin@ancfcc.com?subject=Scan%20Request"><button>+ Request new scan</button></a>
				<div class="usercard">
					<p><?php echo $_SESSION['user_id']; ?></p>
					<img src="img/man.png"></img>
				</div>
			</div>
			
		</div>
	</header>

</body>

<?php

session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Halaman utama</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">
				<!-- Header -->
					<header id="header">
						<h1>Raja Syam</h1>
						<p>Web Dev &nbsp;&bull;&nbsp; Back-End &nbsp;&bull;&nbsp; Never asked for this</p>
						<nav>
							<ul>
								<li><a href="https://instagram.com/rajasyamabbas" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="https://www.linkedin.com/in/raja-syam-abbas-shagir/" class="icon brands fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="https://youtube.com/@syam-data" class="icon brands fa-youtube"><span class="label">YouTube</span></a></li>
								<li><a href="https://github.com/rajasyamabbas" class="icon brands fa-github"><span class="label">Github</span></a></li>
								<li><a href="mailto:rajasyamabbas@gmail.com" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; Made with: ❤️.</span>
					</footer>

			</div>
		</div>
		<script>
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>

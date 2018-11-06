<?php

function BuildPage($body = '') {
	$head = '<!doctype html>
			<html lang="en">
				<head>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
					<meta name="description" content="">
					<meta name="author" content="">
					<link rel="icon" href="includes/img/favicon.ico">
			
					<title>SrEnvio Prueba | Uriel Ramirez</title>

					<!-- Bootstrap core CSS -->
					<link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

					<!-- Custom styles for this template -->
					<link href="css/cover.css" rel="stylesheet">
				</head>

				<body class="text-center">
					<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
						<header class="masthead mb-auto">
							<div class="inner">
								<img src="includes/img/srenvio_logo.svg" alt="home" width="200" height="auto" class="masthead-brand">
								<nav class="nav nav-masthead justify-content-center">
									<a class="nav-link active" href="index.php">Home</a>
									<a class="nav-link" href="#">Features</a>
									<a class="nav-link" href="#">Contact</a>
								</nav>
							</div>
						</header>';

	$footer = '<footer class="mastfoot mt-auto">
					<div class="inner">
						<!-- <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p> -->
					</div>
				</footer>
			</div>

			<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="js/jquery-3.3.1.min.js"></script>
			<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
		</body>
	</html>';

	echo $head . $body . $footer;

	exit;
}
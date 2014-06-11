<?php 
	$current_page = $_GET['q'];
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
				<link rel="stylesheet" href="/styles/style.css">

		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="/scripts.js"></script>
	</head>
	<body>
		<header>	
			<?php include('templates/header.php') ?>
		<header>	

		<main class="container">
			<?php print $current_page ?>
		</main>
</body>
</html>
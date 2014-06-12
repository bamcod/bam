<?php 
	$current_page = $_GET['q'];
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="/styles.css">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<header class="container">	
			<?php include('templates/header.php') ?>
		</header>	

		<main class="container">
			<?php include("templates/$current_page.php") ?>
		</main>
</body>
</html>

<?php 

	function to_vimeo($video_id){
		return "<div class=\"videoWrapper\"><iframe src=\"//player.vimeo.com/video/$video_id?title=0&amp;byline=0&amp;portrait=0&amp;color=f0e00\" width=\"100%\" height=\"595\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>";
	}
?>
<?php 
global $current_page;
$current_page = "accueil";

if(isset($_GET['q']))
{
	$current_page = $_GET['q'];
}?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>BAM Festival |  Electronics Art Festival</title>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, minimal-ui"}</meta>
		<meta name="description" content="BAM Festival // Electronics Art Festival"></meta>
		<meta property="og:description" content="BAM Festival // Electronics Art Festival"></meta>
		<meta property="og:site_name" content="BAM Festival"></meta>
		<meta property="og:image" content="http://bamfestival.be/logo.png"></meta>
		<meta property="og:url" content= "http://bamfestival.be"></meta>
		<meta property="og:type" content="Entertainment"></meta>
		<meta property="og:title" content="BAM Festival"></meta>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="/styles.css">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.17/angular.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body ng-app="myApp">
		<header class="container">	
			<?php include('templates/header.php') ?>
		</header>	

		<main class="container">
			<?php include("templates/$current_page.php") ?>
		</main>
	</body>
</html>

<?php 

function to_vimeo($video_id, $hidden = true){
	$attr = $hidden ? "data-src" : "src";
	return "<div class=\"videoWrapper\"><iframe $attr=\"//player.vimeo.com/video/$video_id?title=0&amp;byline=0&amp;portrait=0&amp;color=f0e00\" width=\"100%\" height=\"595\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>";
}
?>
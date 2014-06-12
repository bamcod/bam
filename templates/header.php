<?php 
	$current = $_GET['q'];

?>

<div class="row">
	<img src="/images/logo.png" alt="" class="logo">

	<nav class=".col-xs-12" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse">
			<ul>
				<li <?php if($current == "accueil"){ print "class='active'";} ?>><a href="/?q=accueil">Accueil</a></li>
				<li <?php if($current == "a-propos"){ print "class='active'";} ?>><a href="/?q=a-propos">À Propos</a></li>
				<li <?php if($current == "programmation"){ print "class='active'";} ?>><a href="/?q=programmation">Programmation</a></li>
				<li <?php if($current == "artistes"){ print "class='active'";} ?>><a href="/?q=artistes">Artistes</a></li>
				<li <?php if($current == "media"){ print "class='active'";} ?>><a href="/?q=media">Média</a></li>
				<li <?php if($current == "infos"){ print "class='active'";} ?>><a href="/?q=infos">Infos</a></li>
			</ul>	
		</div><!-- /.navbar-collapse -->
	</nav>
</div>
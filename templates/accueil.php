<?php 
$images = scandir("slideshow");
unset($images[0]);
unset($images[1]);
?>
<div class="row">
	<div id="home-carousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="pagers carousel-indicators">
	  	<?php foreach($images as $index => $image): ?>
	    <li data-target="#home-carousel" data-slide-to="<?php print $index-2 ?>" class="pager <?php print $index == 2 ? 'active' : '' ?>"></li>
	  <?php endforeach; ?>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	  	<?php foreach($images as $index => $image): ?>
	    	<div class="item <?php print $index == 2 ? 'active' : '';?>">
	      	<img src="/slideshow/<?php print $image ?>" >
	    	</div>
	    <?php endforeach; ?>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#home-carousel" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#home-carousel" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div>
</div>
<div class="row">
	<div class=" col-xs-12 col-md-4">
	<div class="block">
		<p>Pour sa premi&egrave;re &eacute;dition, le BAM Festival collabore avec 2 sites culturels li&eacute;geois incontournables - <em>L&rsquo;Acad&eacute;mie des Beaux-Arts de Li&egrave;ge</em> et <em>Le Cadran</em> - mais aussi avec une structure de renom international en mati&egrave;re d&rsquo;arts num&eacute;riques : <em>le Mapping Festival</em> de Gen&egrave;ve. Le BAM Festival propose un panel d&rsquo;activit&eacute;s s&rsquo;&eacute;talant sur 4 jours : installations sur des sites centriques de la ville de Li&egrave;ge ; performances live d&rsquo;artistes internationaux en premi&egrave;re exclusivit&eacute; belge ; workshops avec un artiste belge de renom, conf&eacute;rences et tables de discussion avec des professionnels du secteur des arts num&eacute;riques ; etc...<br />
		Avec sa programmation de renom, ses diff&eacute;rents partenaires, sa vari&eacute;t&eacute; d&rsquo;activit&eacute;s, et son emplacement centrique, le BAM Festival se veut un festival ouvert &agrave; un large public. Toute personne avide de culture s&rsquo;y retrouvera. Il n&rsquo;est pas question de cibler les avertis d&rsquo;arts num&eacute;riques ni de vulgariser cette discipline artistique pour plaire aux novices. La programmation du festival permet &agrave; chacun d&rsquo;&eacute;changer, de d&eacute;couvrir, d&rsquo;&ecirc;tre interpel&eacute; tout simplement. Nous souhaitons dynamiser la sc&egrave;ne des arts num&eacute;riques en R&eacute;gion Li&eacute;geoise mais aussi &agrave; plus haute &eacute;chelle : en Belgique.</p>
		</div>
	</div>
	<div class=" col-xs-12 col-md-8">
		<div class="block">
			<my-tumblr></my-tumblr>
		</div>
	</div>
</div>
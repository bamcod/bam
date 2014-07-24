<?php 
$images = scandir("slideshow");
unset($images[0]);
unset($images[1]);
?>
<div class="row">
	<div id="home-carousel" class="carousel col-xs-12 slide" data-ride="carousel">
	  <!-- Indicators -->
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	  	<?php foreach($images as $index => $image): ?>
	    	<div class="item <?php print $index == 2 ? 'active' : '';?>">
	      	<img src="/slideshow/<?php print $image ?>" >
	    	</div>
	    <?php endforeach; ?>
	  </div>

	  <div class="indicators-wrapper">
		  <ol class="pagers carousel-indicators">
		  	<?php foreach($images as $index => $image): ?>
		    <li data-target="#home-carousel" data-slide-to="<?php print $index-2 ?>" class="pager <?php print $index == 2 ? 'active' : '' ?>"></li>
		  <?php endforeach; ?>
		  </ol>
		</div>
	  <!-- Controls -->
	  <!-- <a class="left carousel-control" href="#home-carousel" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#home-carousel" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	  </a> -->
	</div>
</div>
<div class="row">
	<div class=" col-xs-12 col-md-4">
	<h1>BAM</h1>
	<div class="block">
		<div id="accordion">
			<div class="lang">
				<a href="#fr" class="lang-trigger yellow">fr</a>
				/
				<a href="#en" class="lang-trigger yellow">en</a>
			</div>
			<p id="fr" class="lang-text">
				Du <em>30 septembre au 3 octobre 2014</em>, Liège accueille la première édition de son festival d’arts numériques :<em> « BAM FESTIVAL Electronik art festival »</em>. 

				Nouvel évènement international belge, le BAM Festival présente une programmation de qualité avec une dizaine d’artistes de renommée mondiale en première exclusivité en Belgique. 

				Situé sur deux sites centriques de Liège, l’<em>Ecole Supérieure des Beaux Arts</em> de la ville de Liège et le <em>Cadran</em>,  l’évènement propose un panel d’activités liées à la culture numérique qui s’adressent tant aux professionnels qu’au grand public : expositions, performances live, conférences, workshop, et clubbing. 


				Pour la petite histoire…

				Le BAM Festival est né de la collaboration entre son organisateur <em>Mike Latona</em>, l’<em>Académie Royale des Beaux Arts de Liège</em> (en la personne de <em>Ronald Dagonnier</em>), le <em>Cadran</em> et le <em>Mapping Festival</em> de Genève. C’est à coup de mails, de téléphone, de skype et de beaucoup d’énergie que nous avons pu mener à bien le projet et proposer un évènement de qualité qui nous l’espérons n’est que le premier d’une longue série.
			</p>
			<p id="en" class="lang-text" style="display:none">
					From <em>September 30th to October 3rd 2014</em>, Liège is welcoming the first edition of numeric arts: <em>“BAM FESTIVAL Electronik art festival”</em>.

					This new international event will feature for the very first time and in exclusivity in Belgium dozens of world-wide famous and cutting-edge artists.

					Located in central spots of the city of Liège, namely l’<em>Ecole Supérieure des Beaux Arts</em> de la ville de Liège and the <em>Cadran</em>, the event offers a wide variety of activities connected to numeric culture, reaching out to both professionals and the public in general: exhibitions, live performances, conferences, workshops, and even clubbing.

					Just so you know…

					The BAM Festival was created by its organiser, <em>Mike Latona</em>, the <em>Académie Royale des Beaux Arts de Liège</em> (through <em>Ronald Dagonnier</em>), the <em>Cadran</em>, and the <em>Mapping Festival</em> of Geneva. Many e-mails, phone calls, skype calls, and lots of determination were required to put together this sensational project that offers such high-quality events which shall hopefully become the founding stone of a long suite of many more.
				</p>
			</div>
		</div>
	</div>
	<div class=" col-xs-12 col-md-8">
		<h1>News</h1>
		<div class="block">
			<my-tumblr></my-tumblr>
		</div>
	</div>
</div>
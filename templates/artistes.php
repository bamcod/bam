<?php 
$artists = array(
	array(
		'name' => '1024 Architecture',
		'gig' => 'Crise',
		'video' => '43788294',
		'image' => '1024.jpg',
		'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
		),
	array(
		'image' => "nonotak.jpg",
		'name' => "Nonotak",
		'gig' => "Late Speculation",
		),
	array(
		'image' => "cenc.jpg",
		'name' => "CENC",
		'gig' => "Disorder",
		),
	array(
		'image' => "lsd.jpg",
		'name' => "Rhythm/Vision",
		'gig' => "L.S.D",
		),
	array(
		'image' => "if.jpg",
		'name' => "If",
		'gig' => "Installation/Relab",
		),
	array(
		'image' => "jacques.jpg",
		'name' => "Jacques André Dupont",
		'gig' => "Installation/Tape-Art",
		),
	array(
		'image' => "vj_jago.jpg",
		'name' => "VJ Jago",
		'gig' => "VJ Set",
		),
	array(
		'image' => "vj_emiko.jpg",
		'name' => "VJ Emiko",
		'gig' => "Performance Audio/Video",
		),
	array(
		'image' => "foolctrl.jpg",
		'name' => "Fool Control",
		'gig' => "Mapping Lightshow",
		),
	array(
		'image' => "ronald.jpg",
		'name' => "Ronald Dagonnier",
		'gig' => "Installation",
		),
	array(
		'image' => "mike.jpg",
		'name' => "Mike Latona",
		'gig' => "Installation",
		),
	array(
		'image' => "refractionlab.jpg",
		'name' => "Refraction Lab",
		'gig' => "Installation Interactive",
		),
	);
	?>

	<ul class="artist-list row">
		<?php foreach ($artists as $artist): ?>
			<li class="artist col-xs-12" >
				<div style="background-image:url('http://bamfestival.be/images/<?php print $artist['image']?>')">
				<h2 class="artist-name">					
					<?php print $artist['name']; ?>
				</h2>
				<h3 class="artist-gig">
					<?php print $artist['gig']; ?>
				</h3>
				<div class="description">
					<div class="close"></div>
					<div class="video col-xs-12 col-sm-4 col-md-5">
						<?php print to_vimeo($artist['video']); ?>
					</div>
					<div class="body col-xs-12 col-sm-8 col-md-7">
						<?php print $artist['body'] ?>
					</div>
				</div>
				</div>
			</li>
		<?php endforeach ?>

	</ul>
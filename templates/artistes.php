<?php 
$artists = array(
	array(
		'name' => '1024 Architecture',
		'gig' => 'Crise',
		'video' => '62206957',
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
		'video' => '75064950',
		'gig' => "Late Speculation",
		),
	array(
		'image' => "cenc.jpg",
		'name' => "CENC",
		'video' => '32111537',
		'gig' => "Disorder",
		),
	array(
		'image' => "lsd.jpg",
		'name' => "Rhythm/Vision",
		'video' => '88683959',
		'gig' => "L.S.D",
		),
	array(
		'image' => "if.jpg",
		'name' => "If",
		'video' => '69831314',
		'gig' => "Installation/Relab",
		),
	array(
		'image' => "jacques.jpg",
		'name' => "Jacques André Dupont",
		'video' => '68816246',
		'gig' => "Installation/Tape-Art",
		),
	array(
		'image' => "vj_jago.jpg",
		'name' => "VJ Jago",
		'video' => '58153156',
		'gig' => "VJ Set",
		),
	array(
		'image' => "vj_emiko.jpg",
		'name' => "VJ Emiko",
		'video' => '59512319',
		'gig' => "Performance Audio/Video",
		),
	array(
		'image' => "foolctrl.jpg",
		'name' => "Fool Control",
		'video' => '76677181',
		'gig' => "Mapping Lightshow",
		),
	array(
		'image' => "ronald.jpg",
		'name' => "Ronald Dagonnier",
		'video' => '',
		'gig' => "Installation",
		),
	array(
		'image' => "mike.jpg",
		'name' => "Mike Latona",
		'video' => '64686287',
		'gig' => "Installation",
		),
	array(
		'image' => "refractionlab.jpg",
		'name' => "Refraction Lab",
		'video' => '79051476',
		'gig' => "Installation Interactive",
		),
	);
	?>

	<ul class="artist-list row">
		<?php foreach ($artists as $artist): ?>
			<li class="artist col-xs-12" >
				<div class="image-wrapper" style="background-image:url('/images/<?php print $artist['image']?>')">
					<div class="col-xs-12">
						<h2 class="artist-name">					
							<?php print $artist['name']; ?>
						</h2>
						<h3 class="artist-gig">
							<?php print $artist['gig']; ?>
						</h3>
					</div>
					<div class="description col-xs-12	">
						<div class="row">
							<div class="close"></div>
							<div class="video col-xs-12 col-sm-4 col-md-5">
								<?php print to_vimeo($artist['video']); ?>
							</div>
							<div class="body col-xs-12 col-sm-8 col-md-7">
								<?php print $artist['body'] ?>
							</div>
						</div>
					</div>
				</div>
			</li>
		<?php endforeach ?>

	</ul>
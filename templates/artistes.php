<?php 
$artists = array(
	array(
		'name' => '1024 Architecture',
		'id' => '1024-archi',
		'gig' => 'Crise',
		'video' => '62206957',
		'image' => '1024.jpg',
		'infos' => '2 septembre – Académie',
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
		'id' => 'nonotak', 
		'video' => '75064950',
		'gig' => "Late Speculation",
		'body' => '',
		),
	array(
		'image' => "cenc.jpg",
		'name' => "CENC",
		'id' => 'cenc', 
		'video' => '32111537',
		'gig' => "Disorder",
		'body' => '',
		),
	array(
		'image' => "lsd.jpg",
		'id' => 'lsd', 
		'name' => "Rhythm/Vision",
		'video' => '88683959',
		'gig' => "L.S.D",
		'body' => '',
		),
	array(
		'image' => "if.jpg",
		'name' => "If",
		'id' => 'if', 
		'video' => '69831314',
		'gig' => "Installation/Relab",
		'body' => '',
		),
	array(
		'image' => "jacques.jpg",
		'name' => "Jacques André Dupont",
		'video' => '68816246',
		'id' => 'jaqcques', 
		'gig' => "Installation/Tape-Art",
		'body' => '',
		),
	array(
		'image' => "vj_jago.jpg",
		'name' => "VJ Jago",
		'id' => 'jago', 
		'video' => '58153156',
		'gig' => "VJ Set",
		'body' => '',
		),
	array(
		'image' => "vj_emiko.jpg",
		'name' => "VJ Emiko",
		'video' => '59512319','id' => 'emiko', 
		'gig' => "Performance Audio/Video",
		'body' => '',
		),
	array(
		'image' => "foolctrl.jpg",
		'name' => "Fool Control",
		'id' => 'fool', 
		'video' => '76677181',
		'gig' => "Mapping Lightshow",
		'body' => '',
		),
	array(
		'image' => "ronald.jpg",
		'name' => "Ronald Dagonnier",
		'video' => '',
		'gig' => "Installation",
		'body' => '',
		'id' => 'ronald', 
		),
	array(
		'image' => "mike.jpg",
		'name' => "Mike Latona",
		'video' => '64686287',
		'gig' => "Installation",
		'body' => '',
		'id' => 'latona', 
		),
	array(
		'image' => "refractionlab.jpg",
		'name' => "Refraction Lab",
		'video' => '79051476',
		'id' => 'refraction', 
		'gig' => "Installation Interactive",
		'body' => '',
		),
	);
	?>

	<ul class="artist-list row">
		<?php foreach ($artists as $artist): ?>
			<li class="artist col-xs-12" >
				<div class="image-wrapper" id="<?php print $artist['id']?>" style="background-image:url('/images/<?php print $artist['image']?>')">
					<div class="col-xs-12">
						<h2 class="artist-name">					
							<?php print $artist['name']; ?>
						</h2>
						<h3 class="artist-gig">
							<?php print $artist['gig']; ?>
						</h3>
					</div>
					<div class="description block col-xs-12	">
						<div class="row">
							<div class="close"></div>
							<div class="video col-xs-12 col-sm-4 col-md-5">
								<?php print to_vimeo($artist['video']); ?>
							</div>
							<div class="col-xs-12 col-sm-8 col-md-7">
								<div class="body">
									<?php print $artist['body'] ?>

								</div>
								<div class="infos">
									<?php print $artist['infos'] ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		<?php endforeach ?>

	</ul>
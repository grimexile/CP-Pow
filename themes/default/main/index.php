<?php if (!defined('FLUX_ROOT')) exit;

$castleNames = Flux::config('CastleNames')->toArray();
$sqlgvg	= "SELECT guild_castle.guild_id AS gcgid, guild_castle.castle_id AS cid, guild.name, guild.master, guild.guild_id AS ggid, guild.emblem_len FROM guild_castle LEFT JOIN guild ON guild_castle.guild_id = guild.guild_id WHERE guild_castle.castle_id IN (" . implode(",", array_keys($Castle['castles'])) . ") ORDER BY guild_castle.castle_id";
$sth = $server->connection->getStatement($sqlgvg);
$sth->execute();
$castlesOccupieds = $sth->fetchAll();

?>

		<section class="banner-area pt-60" id="home">	
			<div class="container text-shadow">
				<div class="row fullscreen d-flex align-items-center justify-content-start">
					<div class="banner-content col-lg-12 text-center">
						<h6 class="text-white text-uppercase">Renewal  | 200/50 | Low-Mid Rates</h6>
						<h1 class="text-uppercase">PowRO - Archangels</h1>
						<p class="pb-60">Una comunidad amable, con un lugar para todos.</p>
						<div class="video_banner_center col-lg-6 video-right justify-content-center align-items-center d-flex">
							<div class="overlay overlay-bg"></div>
							<a class="play-btn" href="https://www.youtube.com/watch?v=1l3weI6rY10"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/play-icon.png') ?>" alt=""></a>
						</div>
						<h6 class="pt-60">Actualizaciones</h6>
						<section id="dg-container" class="dg-container">
							<div class="dg-wrapper" style="height:350px;">
								<a href="https://powroarchangels.com/wiki/index.php?title=Edda_Glastheim" target="_blank">
									<!--<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/bg-support_main1.jpg') ?>" >-->
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/update1.png') ?>" >
									<div class="lightbox">
									</div>
								</a>

								<a href="https://powroarchangels.com/wiki/index.php?title=Da%C3%B1o_MVP" target="_blank">
									<!--<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/bg-support_main1.jpg') ?>" >-->
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/update2.png') ?>" >
									<div class="lightbox">
									</div>
								</a>

								<a href="https://powroarchangels.com/wiki/index.php?title=EDDA_Biolabs" target="_blank">
									<!--<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/bg-support_main1.jpg') ?>" >-->
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/update3.png') ?>" >
									<div class="lightbox">
										<!-- <p class="fecha text-shadow">April 26, 2023
											<span class="category text-shadow">Announcements</span>
										</p>
										<h1 style="color: #C4A87D;">Updates</h1>
										<p class="title text-shadow"><img class="img-fluid img-cover" src="<?php echo $this->themePath('FoxHosting/img/icono-patch_notes.png') ?>" alt="">
											title test  test test test  test  test test test test
										</p> -->
									</div>
								</a>
							</div>
							<nav>	
								<span class="dg-prev">&lt;</span>
								<span class="dg-next">&gt;</span>
							</nav>
						</section>
					</div>					
				</div>
			</div>
		</section>

		<section class="banner-general-information pt-400 pb-100">	
			<div class="container" id="general_information">
				<div class="row justify-content-start align-items-center text-white text-justify">
					<div class="pb-100 pt-100 col-lg-7 box_text text-shadow text-center">
						<h1 class="pb-40 text-uppercase">Información General</h1>
						<p class="text-justify"><?php echo Flux::config('SiteTitle'); ?> es un servidor renewal con una gran cantidad de características oficiales, personalizaciones exclusivas y lo mas importante: No contamos con ningun sitema de donacion, es decir no somos un servidor P2W y aqui 100% de lo obtenido es por merito propio. Esa es la escensia de nuestro querido servidor, te damos la bienvenida a <?php echo Flux::config('SiteTitle'); ?>.</p>
						<!-- <center><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jedi_general_information.png') ?>" alt=""></center>
						<br>
						<h2 class="text-uppercase">CUSTOM JOBS WITH ORIGINAL SPRITES</h2> -->
						<h1 class="pb-40 pt-100 text-uppercase">Eventos</h1>
						<p class="text-justify">Nuestro servidor cuenta con eventos automaticos custom tanto como eventos programados. Todos los detalles se anuncian en nuestro canal de Discord, así que no dudes en unirte a nuestro canal y disfrutar un buen rato con nosotros.</p>
					</div>
				</div>
			</div>
			<div class="container mt-100" id="contenedor_estadisticas">
				<div class="row counter-row">
					<div class="col-12 col-lg-4">
						<div class="border-contenedor estadisticas">
							<div class="row">
								<div class="col-3 col-lg-4 col-md-4">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/min_register_user.png') ?>"/>
								</div>
								<div class="col-9 col-lg-8 col-md-8 single-counter">
									<h6 class="counter"><?php echo $totalPlayers; ?></h6>
									<h4>Usuarios</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="border-contenedor estadisticas">
							<div class="row">
								<div class="col-3 col-lg-4 col-md-4">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/min_new_characters.png') ?>"/>
								</div>
								<div class="col-9 col-lg-8 col-md-8 single-counter">
									<h6 class="counter"><?php echo $totalCharacters; ?></h6>
									<h4>Personajes</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="border-contenedor estadisticas">
							<div class="row">
								<div class="col-3 col-lg-4 col-md-4">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/min_bosees_killed.png') ?>"/>
								</div>
								<div class="col-9 col-lg-8 col-md-8 single-counter">
									<h6 class="counter"><?php foreach ($ServerBossKill as $key => $boss): ?> <?php echo $boss->total; ?> <?php endforeach; ?></h6>
									<h4>MVPs DERROTADOS</h4>
								</div>
							</div>
						</div>
					</div>
															
				</div>
				<img src="<?php echo $this->themePath('FoxHosting/img/angel-left.png') ?>" class="img-left" alt="">	
				<img src="<?php echo $this->themePath('FoxHosting/img/angel-right.png') ?>" class="img-right" alt="">
			</div>	
		</section>

		<section style="background-color:#262323">
		<h2 class="pt-80" style="color:Blue;" align="center">❤ Vota por Nosotros ❤</h2>
		<div class="container mt-100" id="contenedor_estadisticas" align="center">
			<div class="row counter-row">
				<div class="col-8 col-lg-4">
					<a href="https://gtop100.com/topsites/Ragnarok-Online/sitedetails/PowRO-Archangels-102576?vote=1" target="_blank">
						<img align="center" width="330" height="400" class="img-fluid" class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/vote1.png') ?>" >
					</a>
				</div>

				<div class="col-8 col-lg-4">
					<a href="http://www.toprohispano.com/vote/index.php?id=1076" target="_blank">
						<img align="center" width="450" height="450" class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/vote2.gif') ?>" >
					</a>
				</div>

				<div class="col-8 col-lg-4">
					<a href="https://ragnatop.org/index.php?a=in&u=godlike" target="_blank">
						<img align="center" width="400" height="400" class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/vote3.gif') ?>" >
					</a>
				</div>
			</div></br></br></br>
		</div>
		</section>

		<!--<section class="banner-featured-class pb-250 pt-250" id="FeaturedClass">	
			<div class="container">
				<div class="row justify-content-start align-items-center text-white text-justify">
					<div class="pb-100 pt-100 col-lg-6 box_text text-shadow">
						<h2 class="pb-40 text-uppercase">Featured Class</h2>
						<h1 class="pb-40 text-uppercase">STAR EMPERORS</h1>
						<p class="text-justify mb-0">Star Emperors perfected the knowledge of the sun, moon, and the universe beyond.</p>
						<center><img class="mt-0 img-fluid" src="<?php echo $this->themePath('FoxHosting/img/star-emperor.png') ?>" alt=""></center>
						<p class="text-justify">The Star Emperor can strengthen himself by performing various "Stances" attitudes, you will be able to develop specific skills. A blow from a state in which you take a stand and care about your body can do a lot of damage to your opponent. It is a recommended occupation for those who are looking for a powerful attacker of one blow death.</p>
						<p>Among the powers dealing with the sun, moon, and stars, there were those who craved a wider range of knowledge to enhance strength. They began to study around the world, being in a position to learn how to deal with the power of the universe and no longer limited to the sun, moon, and stars. Once they reach a point where they no longer have to take power, they have learned the knowledge of the universe. These people were known as Star Emperors.</p>
					</div>
				</div>
			</div>
		</section>-->
		<section class="banner-black pb-200 pt-200">	
			<div class="container">
				<div class="row justify-content-start align-items-center">
					<div class="col-lg-2">
						<img src="<?php echo $this->themePath('FoxHosting/img/open_beta_left.png') ?>" class="img-fluid" alt="">
					</div>
					<div class="col-lg-8 text-center text-shadow text-white">
						<h2 class="pb-20  text-uppercase"><img src="<?php echo $this->themePath('FoxHosting/img/poring.png') ?>">Rates Seleccionables<img class="rota-horizontal" src="<?php echo $this->themePath('FoxHosting/img/poring.png') ?>"></h2>
						<p>En PowRO contamos con un sistema de rates dinámicos donde puedes seleccionar los rates de tu preferencia pero atención a mayor EXP rates menor DROP rate, los rates por defecto del servidor son 5x/5x/5x, pero con este sistema tus rates de EXP pueden subir hasta 25x/25x!</p>
					</div>	
					<div class="col-lg-2">
						<img src="<?php echo $this->themePath('FoxHosting/img/open_beta_right.png') ?>" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</section>
		<!-- DESABILITANDO LA SECCION DE CLASES
		<section class="banner-jobs-clases pb-100 pt-100" id="jobs_clases">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content col-lg-12">
						<div class="title">
							<h1 class="mb-10 text-uppercase">Jobs Clases</h1>
						</div>
					</div>
				</div>						
				<div class="row">
					<div class="col-12">
						<div class="tab-pane fade show active" id="pills-trascendent" role="tabpanel" aria-labelledby="pills-trascendent-tab">
							<div class="tab-content pt-5 contenedor_descripciones_jobs" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-Sniper" role="tabpanel" aria-labelledby="pills-Sniper-tab">
									<div class="row">
										<div class="col-6">
											<img src="<?php echo $this->themePath('FoxHosting/img/jobs/sniper.png') ?>" class="img-fluid" alt="Image the class Sniper">
										</div>
										<div class="col-6 pt-50">
											<h2 class="text-center pb-20">Sniper</h2>
											<p class="text-justify">One shot, one kill! There is no better way to describe the Sniper. They specialize in precise and powerful ranged attacks. The Sniper is the master of the Bow. In a Sniper's hands, the bow is a deadly instrument capable of dealing massive damage and carnage. They gained a new skill called Falcon Assault with the help of his lifelong friend, the falcon. When friendship strengthens, so does their power. They also have skills that amplify their bow mastery, as well as piercing arrow skills.</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="pills-Professor" role="tabpanel" aria-labelledby="pills-Professor-tab">
									<div class="row">
										<div class="col-6">
											<img src="<?php echo $this->themePath('FoxHosting/img/jobs/professor.png') ?>" class="img-fluid" alt="Image the class Professor">
										</div>
										<div class="col-6 pt-50">
											<h2 class="text-center pb-20">Professor</h2>
											<p class="text-justify">Scholars are the transcendent version of Sages. Through rebirth, Scholars gain class-defining SP manipulative skills such as Soul Exhale, Indulge, and Soul Siphon. The two former skills enable Scholars to act as endless sources of SP, which makes them a favorable class for party play. The third SP-manipulating skill, Soul Siphon, allows Scholars to offensively eliminate all of their opponent's SP, making Scholars a formidable class for PvP and WoE.</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-ClownGypsies" role="tabpanel" aria-labelledby="pills-ClownGypsies-tab">
									<div class="row">
										<div class="col-6">
											<img src="<?php echo $this->themePath('FoxHosting/img/jobs/clowngypsies.png') ?>" class="img-fluid" alt="Image the class Clown & Gypsies">
										</div>
										<div class="col-6 pt-50">
											<h2 class="text-center pb-20">Clown & Gypsies</h2>
											<p class="text-justify">Taught new songs by the gods themselves, Minstrels are now a powerful class. They are able to enchant the enemy with different music and deal large amounts of damage with Arrow Vulcan skill. Minstrel can also give half their stats to a supported character enabling the supported fighter to increase their damage. This job is known as Clown in other localizations</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-HighWizzard" role="tabpanel" aria-labelledby="pills-HighWizzard-tab">
									<div class="row">
										<div class="col-6">
											<img src="<?php echo $this->themePath('FoxHosting/img/jobs/highwizzard.png') ?>" class="img-fluid" alt="Image the class High Wizzard">
										</div>
										<div class="col-6 pt-50">
											<h2 class="text-center pb-20">High Wizzard</h2>
											<p class="text-justify">A High Wizard has much more power than a regular Wizard, and at a much earlier level as well. Unlike the Wizard, it has Mystical Amplification, which will give 50% more MATK on the next offensive magic skill to be cast. This grants a High Wizard a lot more power early on, and has about equal the strength of a level 99 Wizard in their early 80's, maybe even a little earlier. With that skill, they can level in Magma Dungeon immediately with Priest without worry of having too little MATK.</p>
										</div>
									</div>
									
									
								</div>
								<div class="tab-pane fade" id="pills-Stalker" role="tabpanel" aria-labelledby="pills-Stalker-tab">
									<div class="row">
										<div class="col-6">
											<img src="<?php echo $this->themePath('FoxHosting/img/jobs/stalker.png') ?>" class="img-fluid" alt="Image the class Stalker">
										</div>
										<div class="col-6 pt-50">
											<h2 class="text-center pb-20">Stalker</h2>
											<p class="text-justify">A Stalker is the Transcendent variant of Rogues. Most melee classes try to avoid them like the plague in fear of getting fully divested and then clobbered by one of their many copied skills during WoE. Stalkers are geared more towards PvP and WoE, however most builds can do PvM just as well.</p>
										</div>
									</div>	
								</div>
								<div class="tab-pane fade" id="pills-HighPriest" role="tabpanel" aria-labelledby="pills-HighPriest-tab">
									<div class="row">
										<div class="col-6">
											<img src="<?php echo $this->themePath('FoxHosting/img/jobs/highpriest.png') ?>" class="img-fluid" alt="Image the class High Priest">
										</div>
										<div class="col-6 pt-50">
											<h2 class="text-center pb-20">High Priest</h2>
											<p class="text-justify">High Priests get further improved tanking ability thanks to Assumptio. The additional stat points from being a Transcendent, coupled with Meditatio, makes them able to spread their stats out further, which in turn makes new builds like the DEX/VIT/INT WoE possible.</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-AssasinCross" role="tabpanel" aria-labelledby="pills-AssasinCross-tab">
									<div class="row">
										<div class="col-6">
											<img src="<?php echo $this->themePath('FoxHosting/img/jobs/assasincross.png') ?>" class="img-fluid" alt="Image the class Assasin Cross">
										</div>
										<div class="col-6 pt-50">
											<h2 class="text-center pb-20">Assasin Cross</h2>
											<p class="text-justify">The Assassin Cross has a huge repertoire of lethal arts including ultimate mastery of poison-use, better than the original Assassin. With these new skills, the Assassin Cross now has a wide choice of brutal methods to overcome opponents. All without ever leaving the shadows.</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-Creator" role="tabpanel" aria-labelledby="pills-Creator-tab">
									<div class="row">
										<div class="col-6">
											<img src="<?php echo $this->themePath('FoxHosting/img/jobs/creator.png') ?>" class="img-fluid" alt="Image the class Creator">
										</div>
										<div class="col-6 pt-50">
											<h2 class="text-center pb-20">Creator</h2>
											<p class="text-justify">Biochemists (Alt: Creator) are a much stronger class than the Alchemists, provided there are sufficient funds and SP for the new skill Acid Bomb (often abbreviated to "AB" or "AD" as it is known as Acid Demonstration on some other official servers.). While Alchemists were more of a melee class, Biochemists have the option to level with a skill other than Cart Revolution and Mammonite. Many invest a great amount of their stat points into INT instead of AGI, and level with Acid Bomb or magic attacks from weapons (i.e. Fire Bolt through the weapon Fireblend) and Homunculi instead.</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-Ninja" role="tabpanel" aria-labelledby="pills-Ninja-tab">
									<div class="row">
										<div class="col-6">
											<img src="<?php echo $this->themePath('FoxHosting/img/jobs/ninja.png') ?>" class="img-fluid" alt="Image the class Ninja">
										</div>
										<div class="col-6 pt-50">
											<h2 class="text-center pb-20">Ninja</h2>
											<p class="text-justify">The ninja class is fun and offers three types of roles to play: a magic ninja, a throwing ninja (now nerfed to be the weakest of the builds), and a melee ninja. Ninjas excel in the art of evasion with skills like Cicada Skin Shed and Mirror Image which prevent almost all non-magical damage from harming them. Their magic tree offers several fun spells that are unlike that of any other class (although nowhere near as powerful as the Wizard class spells).</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-Paladin" role="tabpanel" aria-labelledby="pills-Paladin-tab">
									<div class="row">
										<div class="col-6">
											<img src="<?php echo $this->themePath('FoxHosting/img/jobs/paladin.png') ?>" class="img-fluid" alt="Image the class Paladin">
										</div>
										<div class="col-6 pt-50">
											<h2 class="text-center pb-20">Paladin</h2>
											<p class="text-justify">Paladins are the Transcendent variant of the Crusader class. Aside from the HP/SP boost, the Paladin's defensive capabilities have not seen significant changes. They do receive many new offensive abilities which inspiring many INT-built Crusaders to become battle-built Paladins. For those Paladins who wish to continue as an INT-type build, the Battle Chant skill allows them to play a supportive role in large party settings, and the 20 additional skills points allow them to learn a much wider variety of skills.</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-LordKnight" role="tabpanel" aria-labelledby="pills-LordKnight-tab">
									<div class="row">
										<div class="col-6">
											<img src="<?php echo $this->themePath('FoxHosting/img/jobs/lordknight.png') ?>" class="img-fluid" alt="Image the class Lord Knight">
										</div>
										<div class="col-6 pt-50">
											<h2 class="text-center pb-20">Lord Knight</h2>
											<p class="text-justify">Lord Knights get the most new skills of the Transcendent Classes: two skills that enhance their damage output, and three skills that deal damage and various status effects. If this isn't enough, they also get (beside the +25% HP) a skill that gives them on-par tanking ability to that of Crusaders in the form of Parry. Their ability to go Berserk unleashes massive damage while in a state of Frenzy. A number of defensive skills complement the Lord Knight's combat mastery.</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-Mastersmith" role="tabpanel" aria-labelledby="pills-Mastersmith-tab">
									<div class="row">
										<div class="col-6">
											<img src="<?php echo $this->themePath('FoxHosting/img/jobs/mastersmith.png') ?>" class="img-fluid" alt="Image the class Mastersmith">
										</div>
										<div class="col-6 pt-50">
											<h2 class="text-center pb-20">Mastersmith</h2>
											<p class="text-justify">The Mastersmith skill base grows upon the Blacksmith's Axe/Mace skills and received a lot of nice new skills. Although the class almost seems to be ignored by Gravity, or almost lowered in power compared to the other Reborn classes, Smiths still pose a dangerous threat to almost every class. They have the power to break Weapons and Armor while they're attacking their enemy with Shattering Strike (Meltdown) and then unleash a flurry of High Speed Cart Rams (Cart Termination). This class takes a lot of customization in order to make work properly and takes a lot of time and effort to play one well.</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-Champion" role="tabpanel" aria-labelledby="pills-Champion-tab">
									<div class="row">
										<div class="col-6">
											<img src="<?php echo $this->themePath('FoxHosting/img/jobs/champion.png') ?>" class="img-fluid" alt="Image the class Champion">
										</div>
										<div class="col-6 pt-50">
											<h2 class="text-center pb-20">Champion</h2>
											<p class="text-justify">A Champion is the Transcendent variant of Monk. Known for the one-hit skill, Guillotine Fist. Champions are even deadlier in close range combat due to their boosted SP count and STR. Champions get mostly new combo-skills as their transcendental skills. Combo skills are mostly used for PvM but still can wreck havoc in PvP if executed properly.</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-gunslinger" role="tabpanel" aria-labelledby="pills-gunslinger-tab">
									<div class="row">
										<div class="col-6">
											<img src="<?php echo $this->themePath('FoxHosting/img/jobs/gunslinger.png') ?>" class="img-fluid" alt="Image the class Gunslinger">
										</div>
										<div class="col-6 pt-50">
											<h2 class="text-center pb-20">Gunslinger</h2>
											<p class="text-justify">Gunslingers are flashy and confident New Age warriors that rely on a wide array of guns and powerful skills to deal as much damage as possible in a short amount of time to their enemies. Gunslingers are always looking for a chance to show off their talent.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 contenedor_jobs_menu">
									<ul class="nav nav_jobs_left nav-pills mb-3" id="pills-tab2" role="tablist">
										<li class="nav-item" role="presentation">
											<a class="nav-link-jobs" id="pills-Sniper-tab" data-toggle="pill" href="#pills-Sniper" role="tab" aria-controls="pills-Sniper" aria-selected="true"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jobs/min_sniper.png') ?>"><br>Sniper</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link-jobs" id="pills-Professor-tab" data-toggle="pill" href="#pills-Professor" role="tab" aria-controls="pills-Professor" aria-selected="false"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jobs/min_professor.png') ?>"><br>Professor</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link-jobs" id="pills-ClownGypsies-tab" data-toggle="pill" href="#pills-ClownGypsies" role="tab" aria-controls="pills-Clown & Gypsies" aria-selected="false"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jobs/min_clowngypsies.png') ?>"><br>Clown & Gypsies</a>
										</li>

										<li class="nav-item" role="presentation">
											<a class="nav-link-jobs" id="pills-HighWizzard-tab" data-toggle="pill" href="#pills-HighWizzard" role="tab" aria-controls="pills-HighWizzard" aria-selected="false"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jobs/min_highwizzard.png') ?>"><br>High Wizzard</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link-jobs active" id="pills-Stalker-tab" data-toggle="pill" href="#pills-Stalker" role="tab" aria-controls="pills-Stalker" aria-selected="false"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jobs/min_stalker.png') ?>"><br>Stalker</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link-jobs" id="pills-HighPriest-tab" data-toggle="pill" href="#pills-HighPriest" role="tab" aria-controls="pills-HighPriest" aria-selected="true"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jobs/min_highpriest.png') ?>"><br>High Priest</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link-jobs" id="pills-AssasinCross-tab" data-toggle="pill" href="#pills-AssasinCross" role="tab" aria-controls="pills-AssasinCross" aria-selected="false"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jobs/min_assasincross.png') ?>"><br>AssasinCross</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link-jobs" id="pills-Creator-tab" data-toggle="pill" href="#pills-Creator" role="tab" aria-controls="pills-Creator" aria-selected="false"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jobs/min_creator.png') ?>"><br>Creator</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link-jobs" id="pills-Mastersmith-tab" data-toggle="pill" href="#pills-Mastersmith" role="tab" aria-controls="pills-Mastersmith" aria-selected="false"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jobs/min_mastersmith.png') ?>"><br>Mastersmith</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link-jobs" id="pills-Champion-tab" data-toggle="pill" href="#pills-Champion" role="tab" aria-controls="pills-Champion" aria-selected="false"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jobs/min_champion.png') ?>"><br>Champion</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link-jobs" id="pills-Paladin-tab" data-toggle="pill" href="#pills-Paladin" role="tab" aria-controls="pills-Paladin" aria-selected="false"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jobs/min_paladin.png') ?>"><br>Paladin</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link-jobs" id="pills-Ninja-tab" data-toggle="pill" href="#pills-LordKnight" role="tab" aria-controls="pills-LordKnight" aria-selected="false"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jobs/min_lordknight.png') ?>"><br>Lord Knight</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link-jobs" id="pills-Ninja-tab" data-toggle="pill" href="#pills-Ninja" role="tab" aria-controls="pills-Ninja" aria-selected="false"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jobs/min_ninja.png') ?>"><br>Ninja</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link-jobs" id="pills-gunslinger-tab" data-toggle="pill" href="#pills-gunslinger" role="tab" aria-controls="pills-gunslinger" aria-selected="false"><img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/jobs/min_gunslinger.png') ?>"><br>Gunslinger</a>
										</li>
									</ul>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</section>
		SECCION DE CLASES -->
		<!--<section class="banner-valorous-store pb-150 pt-150">
			<div class="container">
				<div class="row justify-content-center align-items-center d-flex text-center pb-150">
					<div class="col-9 banner-cellphone pb-100 pt-100 text-right">
						<div class="row">
							<div class="col-7"></div>
							<div class="col-5">
								<h4 class="text-uppercase">!Soon available! </h4>
								<h5>Android / iPhone / Tablets</h5>
								<p>Released for all our Mobile User!</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row d-flex justify-content-center mt-150 text-white" id="valorousStore">
					<div class="menu-content col-lg-12">
						<div class="title text-shadow">
							<h1 class="mb-100 text-uppercase">Register Event</h1>
							<p class="text-center">Register before May 20 and receive a FREE STARTING PACK!.<br>
								The Starting Pack includes the following Items:</p>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-12 col-lg-4">
						<div class="border-contenedor-store estadisticas">
							<div class="row">
								<div class="col-3 col-lg-4 col-md-4">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/miniaturas_valorous_item1.png') ?>"/>
								</div>
								<div class="col-9 col-lg-8 col-md-8">
									<h4>Item 1</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="border-contenedor-store estadisticas">
							<div class="row">
								<div class="col-3 col-lg-4 col-md-4">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/miniaturas_valorous_item2.png') ?>"/>
								</div>
								<div class="col-9 col-lg-8 col-md-8">
									<h4>Item 2</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="border-contenedor-store estadisticas">
							<div class="row">
								<div class="col-3 col-lg-4 col-md-4">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/miniaturas_valorous_item3.png') ?>"/>
								</div>
								<div class="col-9 col-lg-8 col-md-8">
									<h4>Item 3</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="border-contenedor-store estadisticas">
							<div class="row">
								<div class="col-3 col-lg-4 col-md-4">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/miniaturas_valorous_item4.png') ?>"/>
								</div>
								<div class="col-9 col-lg-8 col-md-8">
									<h4>Item 4</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="border-contenedor-store estadisticas">
							<div class="row">
								<div class="col-3 col-lg-4 col-md-4">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/miniaturas_valorous_item5.png') ?>"/>
								</div>
								<div class="col-9 col-lg-8 col-md-8">
									<h4>Item 5</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="border-contenedor-store estadisticas">
							<div class="row">
								<div class="col-3 col-lg-4 col-md-4">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/miniaturas_valorous_item6.png') ?>"/>
								</div>
								<div class="col-9 col-lg-8 col-md-8">
									<h4>Item 6</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
						</div>
					</div>											
				</div>
				<div class="row d-flex justify-content-center mt-100 pb-150 text-white">
					<div class="menu-content col-lg-12 ">
						<div class="title text-center">
							<p class="text-shadow">To claim your Free Starting Pack, Log in to your account after may 20 and visit Miu which is located in SouthProntera (NPC)
								Note: once you click confirm. The perks will only available to the character you're using</p>
							<a class="btn btn-lg btn-download" href="<?php echo $this->url('account','create'); ?>">Register Now</a>
						</div>
					</div>
				</div>
		
			</div>
		</section>-->
		<section class="banner-war-of-emperium pt-250 pb-50" id="woe">
			<div class="container">
				<div class="row justify-content-center align-items-center d-flex text-center">
					<div class="col-12 mb-200">
						<h1 class="mb-100 text-uppercase">War Of Emperium</h1>
					</div>
					<div class="col-12 col-lg-4">
						<div class="border-contenedor-war-of-emperium">
							<div class="row">
								<div class="col-12 col-lg-12 col-md-12">
									<h4>War of Emperium comienza en:</h4>
									<!--<h5 id="countdown">00:00:00</h5>-->
									<h5>Pausadas</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4"></div>
					<div class="col-12 col-lg-4">
						<div class="border-contenedor-war-of-emperium">
							<div class="row">
								<div class="col-6 col-lg-6 col-md-6 text-left">
									<p>Desactivadas</p>
									<p>por ahora,</p>
									<p>pero son los</p>
									<p>Sabados</p>
								</div>
								<div class="col-6 col-lg-6 col-md-6 text-right">
									<p></br></br></br></p>
									<p> </p>
									<p>21:00-22:00</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="row justify-content-center align-items-center d-flex text-center mt-100">
					<div class="col-12 col-md-5 col-lg-5">
						<table class="table table-woe">
							<thead>
								<tr>
									<th colspan="5" class="header_tabla_woe">Guilds con Castillos <img class="img-right" src="<?php echo $this->themePath('FoxHosting/img/header-tabla-woe.png') ?>" alt=""></th>
								</tr>
								<tr>
									<th colspan="3">Guild</th>
									<th>Líder</th>
									<th>Castillos</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($castlesOccupieds as $castleo): ?>


								<tr>
									<td></td>
									<td>
									<?php if( $castleo->emblem_len ): ?>
										<img class="emblem" src="<?php echo $this->emblem($castleo->gcgid); ?>" title="<?php echo "Guild: " . $castleo->name . "<br/>Castle: ". $castleNames[$castleo->cid]; ?>">
									<?php else: ?>
										<!--<img class="emblem" src="<?php echo $this->themePath('FoxHosting/img/guild-emblem.png'); ?>" alt="">-->
										<img class="emblem" src="<?php echo $this->themePath('FoxHosting/img/favicon/android-icon-48x48.png'); ?>" alt="">
									<?php endif; ?>
									</td>
									<td><?php echo $castleo->name; ?><br><?php echo $castleNames[$castleo->cid]; ?></td>
									<td><?php echo $castleo->master; ?></td>
<?php 
	$sqlCasOwn = "SELECT COUNT(castle_id) as total FROM `guild_castle` WHERE `guild_id` = '$castleo->gcgid;'";
	$sthCasOwn = $server->connection->getStatement($sqlCasOwn);
	$sthCasOwn->execute();
	$TotalCasOwn = $sthCasOwn->fetchAll();
?>
									<td><?php foreach ($TotalCasOwn as $key => $own): ?> <?php echo $own->total; ?> <?php endforeach; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
<!-- Enable this if you want another table for castle
					<div class="col-2 col-md-2 col-lg-2"></div>
					<div class="col-12 col-md-5 col-lg-5">
						<table class="table table-woe">
							<thead>
								<tr>
									<th colspan="5" class="header_tabla_woe">AGIT LORDS HOLDERS <img class="img-left rota-horizontal" src="<?php echo $this->themePath('FoxHosting/img/header-tabla-woe.png') ?>" alt=""></th>
								</tr>
								<tr>
									<th colspan="3">Guild Name</th>
									<th>Guild Leader</th>
									<th>Castle's Owned</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td><img src="<?php echo $this->themePath('FoxHosting/img/guild-emblem.png') ?>" alt="Emblem Logo"></td>
									<td>Guild Name<br>Kriemhild</td>
									<td>Sample Name</td>
									<td>3</td>
								</tr>
								<tr>
									<td></td>
									<td><img src="<?php echo $this->themePath('FoxHosting/img/guild-emblem.png') ?>" alt="Emblem Logo"></td>
									<td>Guild Name<br>Swanhild</td>
									<td>Sample Name</td>
									<td>3</td>
								</tr>
								<tr>
									<td></td>
									<td><img src="<?php echo $this->themePath('FoxHosting/img/guild-emblem.png') ?>" alt="Emblem Logo"></td>
									<td>Guild Name<br>Fadhgrindh</td>
									<td>Sample Name</td>
									<td>3</td>
								</tr>
								<tr>
									<td></td>
									<td><img src="<?php echo $this->themePath('FoxHosting/img/guild-emblem.png') ?>" alt="Emblem Logo"></td>
									<td>Guild Name<br>Skoegul</td>
									<td>Sample Name</td>
									<td>3</td>
								</tr>
							</tbody>
						</table>
					</div>
					</div>
-->
				</div>
			</div>
		</section>

		<section class="gallery-area pt-450 pb-150" id="gallery">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content col-lg-12 pb-60">
						<div class="title text-center">
							<h1 class="mb-10 text-white text-shadow">Fotos de Nuestra Comunidad <3</h1>
						</div>
					</div>
				</div>						
				<div class="row">
					<div class="col-lg-5">
						<a href="https://powroarchangels.com/uploads/7.png" class="img-pop-home">
							<img class="img-fluid" src="https://powroarchangels.com/uploads/7.png" alt="">
						</a>	
					</div>
					<div class="col-lg-7">
						<!--<div class="row">
							<div class="col-lg-4">
								<a href="img/g3.jpg" class="img-pop-home">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/g3.jpg') ?>" alt="">
								</a>
							</div>
							<div class="col-lg-4">
								<a href="img/g3.jpg" class="img-pop-home">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/g3.jpg') ?>" alt="">
								</a>	
							</div>
							<div class="col-lg-4">
								<a href="img/g3.jpg" class="img-pop-home">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/g3.jpg') ?>" alt="">
								</a>	
							</div>
							<div class="col-lg-4">
								<a href="img/g4.jpg" class="img-pop-home">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/g4.jpg') ?>" alt="">
								</a>	
							</div>
							<div class="col-lg-4">
								<a href="img/g5.jpg" class="img-pop-home">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/g5.jpg') ?>" alt="">
								</a>	
							</div>
							<div class="col-lg-4">
								<a href="img/g5.jpg" class="img-pop-home">
									<img class="img-fluid" src="<?php echo $this->themePath('FoxHosting/img/g5.jpg') ?>" alt="">
								</a>	
							</div>
						</div>-->
						<div class="row">
							<div class="col-lg-4">
								<a href="https://powroarchangels.com/uploads/1.png" class="img-pop-home">
									<img class="img-fluid" src="https://powroarchangels.com/uploads/1.png" alt="">
								</a>
							</div>
							<div class="col-lg-4">
								<a href="https://powroarchangels.com/uploads/2.png" class="img-pop-home">
									<img class="img-fluid" src="https://powroarchangels.com/uploads/2.png" alt="">
								</a>	
							</div>
							<div class="col-lg-4">
								<a href="https://powroarchangels.com/uploads/3.png" class="img-pop-home">
									<img class="img-fluid" src="https://powroarchangels.com/uploads/3.png" alt="">
								</a>	
							</div>
							<div class="col-lg-4">
								<a href="https://powroarchangels.com/uploads/4.png" class="img-pop-home">
									<img class="img-fluid" src="https://powroarchangels.com/uploads/4.png" alt="">
								</a>	
							</div>
							<div class="col-lg-4">
								<a href="https://powroarchangels.com/uploads/5.png" class="img-pop-home">
									<img class="img-fluid" src="https://powroarchangels.com/uploads/5.png" alt="">
								</a>	
							</div>
							<div class="col-lg-4">
								<a href="https://powroarchangels.com/uploads/6.png" class="img-pop-home">
									<img class="img-fluid" src="https://powroarchangels.com/uploads/6.png" alt="">
								</a>	
							</div>
						</div>
					</div>
				</div>
			</div>	
		</section>
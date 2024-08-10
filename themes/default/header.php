<?php if (!defined('FLUX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php if (isset($metaRefresh)): ?>
		<meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
		<?php endif ?>
		<title><?php echo Flux::config('SiteTitle'); if (isset($title)) echo ": $title" ?></title>
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<link href="<?php echo $this->themePath('css/flux/unitip.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
		<?php if (Flux::config('EnableReCaptcha')): ?>
		<link href="<?php echo $this->themePath('css/flux/recaptcha.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
		<?php endif ?>
		<!--[if IE]>
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux/ie.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<![endif]-->

		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $this->themePath('FoxHosting/img/favicon/apple-icon-57x57.png') ?>">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $this->themePath('FoxHosting/img/favicon/apple-icon-60x60.png') ?>">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->themePath('FoxHosting/img/favicon/apple-icon-72x72.png') ?>">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $this->themePath('FoxHosting/img/favicon/apple-icon-76x76.png') ?>">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->themePath('FoxHosting/img/favicon/apple-icon-114x114.png') ?>">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $this->themePath('FoxHosting/img/favicon/apple-icon-120x120.png') ?>">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $this->themePath('FoxHosting/img/favicon/apple-icon-144x144.png') ?>">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $this->themePath('FoxHosting/img/favicon/apple-icon-152x152.png') ?>">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $this->themePath('FoxHosting/img/favicon/apple-icon-180x180.png') ?>">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $this->themePath('FoxHosting/img/favicon/android-icon-192x192.png') ?>">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $this->themePath('FoxHosting/img/favicon/favicon-32x32.png') ?>">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $this->themePath('FoxHosting/img/favicon/favicon-96x96.png') ?>">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $this->themePath('FoxHosting/img/favicon/favicon-16x16.png') ?>">
		<link rel="manifest" href="<?php echo $this->themePath('FoxHosting/img/favicon/manifest.json') ?>">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo $this->themePath('FoxHosting/img/favicon/ms-icon-144x144.png') ?>">
		<meta name="theme-color" content="#ffffff">
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="<?php echo $this->themePath('FoxHosting/css/linearicons.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('FoxHosting/css/font-awesome.min.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('FoxHosting/css/bootstrap.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('FoxHosting/css/magnific-popup.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('FoxHosting/css/nice-select.css') ?>">				
		<link rel="stylesheet" href="<?php echo $this->themePath('FoxHosting/css/animate.min.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('FoxHosting/css/owl.carousel.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('FoxHosting/css/main.css') ?>">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-LXP3Z4QCXE"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-LXP3Z4QCXE');
		</script>
		<script type="text/javascript" src="<?php echo $this->themePath('FoxHosting/js/modernizr.custom.53451.js') ?>"></script>

		<!--[if lt IE 9]>
		<script src="<?php echo $this->themePath('js/ie9.js') ?>" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitpngfix.js') ?>"></script>
		<![endif]-->
		<script type="text/javascript" src="<?php echo $this->themePath('js/jquery-1.8.3.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.datefields.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitip.js') ?>"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				var inputs = 'input[type=text],input[type=password],input[type=file]';
				$(inputs).focus(function(){
					$(this).css({
						'background-color': '#f9f5e7',
						'border-color': '#dcd7c7',
						'color': '#726c58'
					});
				});
				$(inputs).blur(function(){
					$(this).css({
						'backgroundColor': '#ffffff',
						'borderColor': '#dddddd',
						'color': '#444444'
					}, 500);
				});
				$('.menuitem a').hover(
					function(){
						$(this).fadeTo(200, 0.85);
						$(this).css('cursor', 'pointer');
					},
					function(){
						$(this).fadeTo(150, 1.00);
						$(this).css('cursor', 'normal');
					}
				);
				$('.money-input').keyup(function() {
					var creditValue = parseInt($(this).val() / <?php echo Flux::config('CreditExchangeRate') ?>, 10);
					if (isNaN(creditValue))
						$('.credit-input').val('?');
					else
						$('.credit-input').val(creditValue);
				}).keyup();
				$('.credit-input').keyup(function() {
					var moneyValue = parseFloat($(this).val() * <?php echo Flux::config('CreditExchangeRate') ?>);
					if (isNaN(moneyValue))
						$('.money-input').val('?');
					else
						$('.money-input').val(moneyValue.toFixed(2));
				}).keyup();
				
				// In: js/flux.datefields.js
				processDateFields();
			});
			
			function reload(){
				window.location.href = '<?php echo $this->url ?>';
			}
		</script>
		
		<script type="text/javascript">
			function updatePreferredServer(sel){
				var preferred = sel.options[sel.selectedIndex].value;
				document.preferred_server_form.preferred_server.value = preferred;
				document.preferred_server_form.submit();
			}
			
			function updatePreferredTheme(sel){
				var preferred = sel.options[sel.selectedIndex].value;
				document.preferred_theme_form.preferred_theme.value = preferred;
				document.preferred_theme_form.submit();
			}

            function updatePreferredLanguage(sel){
                var preferred = sel.options[sel.selectedIndex].value;
                setCookie('language', preferred);
                reload();
            }

			// Preload spinner image.
			var spinner = new Image();
			spinner.src = '<?php echo $this->themePath('img/spinner.gif') ?>';
			
			function refreshSecurityCode(imgSelector){
				$(imgSelector).attr('src', spinner.src);
				
				// Load image, spinner will be active until loading is complete.
				var clean = <?php echo Flux::config('UseCleanUrls') ? 'true' : 'false' ?>;
				var image = new Image();
				image.src = "<?php echo $this->url('captcha') ?>"+(clean ? '?nocache=' : '&nocache=')+Math.random();
				
				$(imgSelector).attr('src', image.src);
			}
			function toggleSearchForm()
			{
				//$('.search-form').toggle();
				$('.search-form').slideToggle('fast');
			}

            function setCookie(key, value) {
                var expires = new Date();
                expires.setTime(expires.getTime() + expires.getTime()); // never expires
                document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
            }
		</script>
		
		<?php if (Flux::config('EnableReCaptcha')): ?>
			<script src='https://www.google.com/recaptcha/api.js'></script>
		<?php endif ?>
		
	</head>
	<body>

<?php include $this->themePath('main/status.php', true); ?>
<?php $Castle = include $this->themePath('main/CastleConfig.php', true); ?>

<header id="header" id="home">
    <div class="header-top top_bar">
            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col-lg-12 col-sm-12 col-12 header-top-right no-padding">
                    <ul class="text-gray">
                        <li>Estado del Servidor: <?php echo ($mapserver)? $online:$offline; ?></li>
                        <li><a href="<?php echo $this->url('character','online'); ?>">Personajes Conectados: <span class="player_online"><?php echo $online_player; ?></span></a></li>
                        <li>Peak: <span class="online_peak"><?php foreach ($ServerPeak as $key => $peak): ?> <?php echo $peak->OnlinePeak; ?> <?php endforeach; ?></span></li>
                    </ul>
                    </div>
                </div>			  					
            </div>
    </div>			  	
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between d-flex pr-3 pl-3">
            <div id="logo">
            <a href="<?php echo $this->url('main'); ?>"><img src="<?php echo $this->themePath('FoxHosting/img/logo_esp.png') ?>" alt="" title="" /> </a>
            </div>
            <nav id="nav-menu-container">
            <ul class="nav-menu">
		<li class="menu-active"><a href="<?php echo $this->url('main'); ?>">Inicio</a></li>
		<li><a href="#">Información</a>
			<ul>
                	<li><a href="https://powroarchangels.com/wiki/index.php?title=Informacion">Información</a></li>
                	<!--<li><a href="<?php echo $this->url('main','roadmap'); ?>">Roadmap</a></li>-->
                	<li><a href="https://powroarchangels.com/wiki/index.php?title=Changelogs">Changelogs</a></li>
                	<!--<li><a href="<?php echo $this->url('main','privacy'); ?>">Privacy & Policy</a></li>-->
                	<li><a href="<?php echo $this->url('main','tos'); ?>">Reglas</a></li>
                	</ul>
		</li>
		<li><a href="https://powroarchangels.com/wiki/index.php?title=P%C3%A1gina_principal">Wiki</a></li>
		<?php if( !$session->isLoggedIn() ): ?>
			<li><a href="<?php echo $this->url('account','create'); ?>">Registrate</a></li>
		<?php endif; ?>
		<!--<li><a href="<?php echo $this->url('account','create'); ?>">Registrate</a></li>-->
		<!--<li><a href="<?php echo $this->url('donate'); ?>">Donate</a></li>-->
		<li><a href="<?php echo $this->url('ranking','death'); ?>">Ranking</a></li>
		<li><a href="<?php echo $this->url('logdata','command'); ?>">Logs</a></li>
		<li><a href="https://www.facebook.com/PowArchangels" target="_blank">Facebook</a></li>
		<li><a href="https://discord.com/invite/xbASZKSEvd" target="_blank">Discord</a></li>
		<li><a href="https://www.instagram.com/powragnarok/" target="_blank">Instagram</a></li>
		<!--<li><a href="#" target="_blank">Forum</a></li>-->
		<?php if( !$session->isLoggedIn() ): ?>
			<li class="menu_create_account"><a href="<?php echo $this->url('account','login'); ?>">Iniciar Sección</a></li>
		<?php else:?>
			<li><a href="<?php echo $this->url('voteforpoints'); ?>">Vote</a>
				<!--<ul>
					<li><a href="https://gtop100.com/topsites/Ragnarok-Online/sitedetails/PowRO-Archangels-102576?vote=1">GTOP 100</a></li>
					<li><a href="http://www.toprohispano.com/vote/index.php?id=1076">TOP RO HISPANO</a></li>
					<li><a href="https://ragnatop.org/index.php?a=in&u=godlike">RAGNA TOP</a></li>
				</ul>
				-->
			</li>
			<li class="menu_create_account">
				<a style="color:red;" href="<?php echo $this->url('account','logout'); ?>">Salir</a>
				<a href="<?php echo $this->url('account','view'); ?>">Mi Cuenta</a>
			</li>
		<?php endif; ?>
                <li><a class="btn btn-download" href="<?php echo $this->url('main','download')?>">Descargas</a></li>
            </ul>
            </nav>		    		
        </div>
    </div>
</header>
								
								<!-- Messages -->
								<?php if ($message=$session->getMessage()): ?>
									<p class="message"><?php echo htmlspecialchars($message) ?></p>
								<?php endif ?>
								
								<!-- Sub menu -->
								<?php include $this->themePath('main/submenu.php', true) ?>
								
								<!-- Page menu -->
								<div class="container">
									<?php include $this->themePath('main/pagemenu.php', true) ?>
								</div>
								
								<!-- Credit balance -->
								<?php if (in_array($params->get('module'), array('donate', 'purchase'))) include $this->themePath('main/balance.php', true) ?>

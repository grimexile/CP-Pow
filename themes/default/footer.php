<?php if (!defined('FLUX_ROOT')) exit; ?>
<footer class="footer-area pt-1 pb-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 social-widget">
						<div class="single-footer-widget">
							<center>
							<img src="<?php echo $this->themePath('FoxHosting/img/logo_esp2.png') ?>" alt="Logo <?php echo Flux::config('SiteTitle'); ?>"/>
							<div class="footer-social links_pequenos pt-10 pb-10">
								<center>
									<a target="_blank" href="https://powroarchangels.com/wiki/index.php?title=Informacion">Información</a>
									<a target="_blank" href="https://powroarchangels.com/wiki/index.php?title=Changelogs">Changelogs</a>
									<a target="_blank" href="<?php echo $this->url('main','tos'); ?>">Reglas</a>
								</center>
							</div>
								<p><i class="fa fa-copyright"></i> Copyright 2024 - <?php echo Flux::config('SiteTitle'); ?></p>
							</center>
						</div>
					</div>							
				</div>
			</div>
		</footer>
	
		<!-- End footer Area -->	

		<script src="<?php echo $this->themePath('FoxHosting/js/vendor/jquery-2.2.4.min.js') ?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="<?php echo $this->themePath('FoxHosting/js/vendor/bootstrap.min.js') ?>"></script>			
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		  <script src="<?php echo $this->themePath('FoxHosting/js/easing.min.js') ?>"></script>			
		<script src="<?php echo $this->themePath('FoxHosting/js/hoverIntent.js') ?>"></script>
		<script src="<?php echo $this->themePath('FoxHosting/js/superfish.min.js') ?>"></script>	
		<script src="<?php echo $this->themePath('FoxHosting/js/jquery.ajaxchimp.min.js') ?>"></script>
		<script src="<?php echo $this->themePath('FoxHosting/js/jquery.magnific-popup.min.js') ?>"></script>	
		<script src="<?php echo $this->themePath('FoxHosting/js/owl.carousel.min.js') ?>"></script>			
		<script src="<?php echo $this->themePath('FoxHosting/js/waypoints.min.js') ?>"></script>
		<script src="<?php echo $this->themePath('FoxHosting/js/jquery.counterup.min.js') ?>"></script>					
		<script src="<?php echo $this->themePath('FoxHosting/js/mail-script.js') ?>"></script>	
		<script src="<?php echo $this->themePath('FoxHosting/js/main.js') ?>"></script>	

		<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
		<script type="text/javascript" src="<?php echo $this->themePath('FoxHosting/js/jquery.gallery.js') ?>"></script>
		<script type="text/javascript">
		
			
			$('#dg-container').gallery();
    
		
		</script>
		<script src="<?php echo $this->themePath('FoxHosting/js/counter.js') ?>"></script>
	</body>
</html>
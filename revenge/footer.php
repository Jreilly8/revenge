<div class="container-fluid marg-top-30 footer gradient2">
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<?php dynamic_sidebar( 'Footer 1' ); ?>
			</div>
			<div class="col-xs-6 col-md-3">				
				<?php dynamic_sidebar( 'Footer 2' ); ?>						
			</div>
			<div class="col-xs-6 col-md-3">
				<?php dynamic_sidebar( 'Footer 3' ); ?>
			</div>
			<div class="col-xs-6 col-md-3">
				<?php dynamic_sidebar( 'Footer 4' ); ?>
			</div>

		</div>	
		<div class="row">
			<div class="col-xs-12">
				<footer>
					<p class="pad-left-35">&copy;<?php echo get_theme_mod('footer_copyright'); ?></p>
				</footer>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>	    
	    <?php wp_footer(); ?>
</body>
</html>
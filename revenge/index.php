<?php get_header(); ?>

	<?php 
		query_posts( array( 'category_name' => 'home-jumbotron', 'posts_per_page' => 1 ) );
			while(have_posts()) : the_post();
	?>
			<div class="jumbotron bg-blk">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p><?php the_content(); ?></p>
				<div class="row row-centered">
					<div class="col-xs-12 col-md-12 pad-top-10">
						<a name="bottom" href="#bottom" class="scroll-link"><img src="<?php echo get_template_directory_uri(); ?>/images/scroll-readmore_icon.png" alt="scroll down"/></a>
					</div>	
				</div>		
			</div>
	<?php endwhile; wp_reset_query(); ?>
	<div class="container-fluid gradient1 marg-bot-20">		
		<div class="row pad-top-20 marg-bot-10 pad-first font-white ">
			<div class="col-xs-12 col-md-3 col-md-offset-1">
				<?php dynamic_sidebar( 'Home Box 1' ); ?>			
			</div>
			<div class="col-xs-12 col-md-3">
				<?php dynamic_sidebar( 'Home Box 2' ); ?>	
			</div>
			<div class="col-xs-12 col-md-3">
				<?php dynamic_sidebar( 'Home Box 3' ); ?>
			</div>
		</div>	
	</div>
	<div class="container-fluid bg-blk">		
		<div class="row pad-top-20 marg-bot-10 pad-first font-white ">
			<div class="hidden-xs hidden-sm col-md-4">
				<?php dynamic_sidebar( 'Home Left' ); ?>

			</div>
			<div class="col-xs-12 col-md-8">
				<?php 
				query_posts('posts_per_page=3&offset=1');
				while(have_posts()) : the_post(); 
				?>
					<h3 class="open-sans-bld shake"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p class="open-sans"><?php the_excerpt(); ?></p>
					<p class="divider text-muted">Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>
			<?php endwhile; wp_reset_query(); ?>
			</div>

		</div>
	</div>
<?php get_footer(); ?>
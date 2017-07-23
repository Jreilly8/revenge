<?php get_header(); ?>
	<div class="container-fluid bg-blk">		
		<div class="row">
			<div class="col-xs-12 col-md-9">
			<p class="open-sans"><?php the_posts_pagination(); ?></p>
			<?php while(have_posts()) : the_post(); ?>
				<h3 class="open-sans-bld shake"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="text-muted">Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>
				<p class="open-sans"><?php the_excerpt(); ?></p>							
			<?php endwhile; wp_reset_query(); ?>
			<p class="open-sans"><?php the_posts_pagination(); ?></p>		
			</div>
			<div class="col-xs-12 col-md-3"><p class="open-sans"><?php the_posts_pagination(); ?></p>
				<div class="well bg-blk marg-top-20">										
					<?php dynamic_sidebar( 'Single Post' ); ?>					
				</div>				
			</div>
		</div>		
	</div>
	<div class="container-fluid gradient1">
		<div class="row">
			<p class="text-center pad-top-20 open-sans-bld font-22 font-red"><?php bloginfo('description'); ?></p>
		</div>	
	</div>	
<?php get_footer(); ?>

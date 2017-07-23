<?php get_header(); ?>
	<div class="container-fluid bg-blk">		
		<div class="row">
			<div class="col-xs-12 col-md-9" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php while(have_posts()) : the_post(); ?>
				<h3 class="open-sans-bld shake marg-top-30"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="divider text-muted">Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>
				<p class="open-sans"><?php the_tags( 'Tags: ', ', ', '<br />' ); ?></p>
				<p class="open-sans"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_content(''); ?></p>
				<?php wp_link_pages(); ?>				
				<div id="comments"><?php comments_template(); ?></div>								
			<?php endwhile; wp_reset_query(); ?>		
			</div>
			<div class="col-xs-12 col-md-3">
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

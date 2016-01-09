

<?php get_header(); ?>

	<!--========
	content section
	============-->
	
	<div class="content">
		<div class="row">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				
					<?php
						the_content();
					?>
	
				</article>
	
				<?php endwhile; else : ?>
	
			<?php endif; ?>
	
		</div> <!-- end row -->
	</div> <!-- end content -->
	
<?php get_footer(); ?>

	</body>

</html>
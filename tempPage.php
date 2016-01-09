<?php get_header(); ?>

	<!--========
	content section
	============-->
	
	<div class="content">
	
		<div class="row">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header>
	
						<h1 itemprop="headline"><?php the_title(); ?></h1>
	
						<p><?php printf( __( 'Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?></p>
	
					</header> <?php // end article header ?>
	
					<section itemprop="articleBody">
						<?php the_content();
							wp_link_pages( array(
								'before'      => '<div><span>' . __( 'Pages:', 'bonestheme' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							) );
						?>
					</section> <?php // end article section ?>

				</article>

				<?php endwhile; else : ?>

				<article id="post-not-found">
					<header>
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section>
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer>
						<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

			<?php endif; ?>

		</div>

	</div>

<?php get_footer(); ?>
<?php get_header(); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>">

		<div class="page-header text-center">
			<h1><?php the_title(); ?></h1>
		</div>

		<?php the_content(); ?>
	</article>

		<?php	endwhile; endif; ?>

<?php get_footer(); ?>
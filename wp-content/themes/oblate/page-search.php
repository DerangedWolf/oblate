<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="page-header">
	<div class="small-container">
		<h1>
			<?php the_title(); ?>
		</h1>
	</div>
</header>

<section>
	<div class="container">
		<?php the_content(); ?>
	</div>

	<div class="search-container">
		<?php get_search_form(); ?>
	</div>

	<div class="container">
		<p class="text-center"><small><strong>Popular topics:</strong> <a href="<?php echo site_url(); ?>?s=wordpress">WordPress</a>, <a href="<?php echo site_url(); ?>?s=bootstrap">Bootstrap</a>, <a href="<?php echo site_url(); ?>?s=sass">Sass</a></small></p>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer();

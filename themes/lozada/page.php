<?php get_header(); ?>
<?php

	if ( have_posts() ) {
		while ( have_posts()) {
			the_post(); ?>
	
			<div id="pagina">
				<h1><?php the_title(); ?></h1>
			</div> <!--END PAGINA -->
			<!--<img id="fotofer" src="<?php bloginfo('template_url'); ?>/Images/fer.jpeg">-->
				<?php the_content(); ?>

		</div> <!--END WRAPPER-->

		<?php
			}
	}

	?>

<?php get_footer(); ?>

<?php get_header(); ?>


<?php if ( have_posts() ) {
	while ( have_posts() ){
		the_post(); ?>


			<div id='pagina'>
				<h1><?php
				foreach((get_the_category()) as $category) {
	echo $category->cat_name . ' ';
}

				?></h1>
			</div> <!--END PAGINA -->
			<div class='content'>
				<h3><?php the_title(); ?></h3>
				<div id='descproy'><p><?php the_content(); ?></p>
				</div>
	
			</div>	<!--END CONTENT-->
		</div> <!--END WRAPPER-->
		<?php 
	}
}

?>


<?php get_footer(); ?>

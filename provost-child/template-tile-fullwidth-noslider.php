<?php
/*
	Template Name: Full width no slider - tiles
*/

	get_header();
?>
		<main id="contentArea">
			<?php custom_breadcrumbs(); ?>
			<section id="mainContent" class="tile-page no-slider">
				<article class="currentContent">	
					<?php
						if(have_posts()) :
						while (have_posts()) : the_post();?>

						   			<h1><?php the_title(); ?></h1>
					   				<?php the_content(); ?>

					   	<?php endwhile;
							else :
								echo '<p>No Content Found</p>';
					endif;
					wp_reset_query();
				?>
				</article><!-- End .currentContent -->
							<section class="tiles">
	   			<?php if(get_field('square_1')) { ?>
		   			<aside class="tile">
		   				<div class="featured-image">
		   						<img src="<?php the_field('square_1_photo'); ?>" alt="" />
		   				</div>
			   				<?php the_field('square_1'); ?>
		   			</aside>
	   			<?php }	?>
	   			<?php if(get_field('square_2')) { ?>
		   			<aside class="tile">
		   				<div class="featured-image">
		   						<img src="<?php the_field('square_2_photo'); ?>" alt="" />
		   				</div>
			   				<?php the_field('square_2'); ?>
		   			</aside>
	   			<?php }	?>
	   			<?php if(get_field('square_3')) { ?>
		   			<aside class="tile">
		   				<div class="featured-image">
		   						<img src="<?php the_field('square_3_photo'); ?>" alt="" />
		   				</div>
			   				<?php the_field('square_3'); ?>
		   			</aside>
	   			<?php }	?>
	   			<?php if(get_field('square_4')) { ?>
		   			<aside class="tile">
		   				<div class="featured-image">
		   						<img src="<?php the_field('square_4_photo'); ?>" alt="" />
		   				</div>
			   				<?php the_field('square_4'); ?>
		   			</aside>
	   			<?php }	?>
	   			<?php if(get_field('square_5')) { ?>
		   			<aside class="tile">
		   				<div class="featured-image">
		   						<img src="<?php the_field('square_5_photo'); ?>" alt="" />
		   				</div>
			   				<?php the_field('square_5'); ?>
		   			</aside>
	   			<?php }	?>
	   			<?php if(get_field('square_6')) { ?>
		   			<aside class="tile">
		   				<div class="featured-image">
		   						<img src="<?php the_field('square_6_photo'); ?>" alt="" />
		   				</div>
			   				<?php the_field('square_6'); ?>
		   			</aside>
	   			<?php }	?>
	   			<?php if(get_field('square_7')) { ?>
		   			<aside class="tile">
		   				<div class="featured-image">
		   						<img src="<?php the_field('square_7_photo'); ?>" alt="" />
		   				</div>
			   				<?php the_field('square_7'); ?>
		   			</aside>
	   			<?php }	?>
	   			<?php if(get_field('square_8')) { ?>
		   			<aside class="tile">
		   				<div class="featured-image">
		   						<img src="<?php the_field('square_8_photo'); ?>" alt="" />
		   				</div>
			   				<?php the_field('square_8'); ?>
		   			</aside>
	   			<?php }	?>
	   			<?php if(get_field('square_9')) { ?>
		   			<aside class="tile">
		   				<div class="featured-image">
		   						<img src="<?php the_field('square_9_photo'); ?>" alt="" />
		   				</div>
			   				<?php the_field('square_9'); ?>
		   			</aside>
	   			<?php }	?>
	   		</section><!-- tiles end -->	
   		</section><!-- End .tile-page -->
		</main>
		<?php
	   		global $post;
	   		if(in_array( 117, get_post_ancestors($post))) {
		   		get_sidebar( 'about' );
	   		} //elseif(in_array( 117, get_post_ancestors($post))) {
		   		//get_sidebar( 'counseling' );
	   		//} 
	   		elseif(in_array( 623, get_post_ancestors($post))) {
		   		get_sidebar( 'title-i' );
	   		} 
	   		elseif(in_array( 122, get_post_ancestors($post))) {
		   		get_sidebar( 'policies-forms' );
	   		} elseif(in_array( 70, get_post_ancestors($post))) {
		   		get_sidebar( 'faculty-staff' );
	   		} else {
		   		get_sidebar( $sidebar );
	   		}

			get_footer();
		?>
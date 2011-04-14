<?php

get_header();
?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="grid_7">
					<?php if (has_post_thumbnail()){
						the_post_thumbnail( 'project-grid-thumbnail' );
					} else {
					?>No thumbnail available...<?php
					}
					?>
</div>
					<div class="grid_5">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
						<strong>Client:</strong> Fifth Third Bank
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'aaronjohnson' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'aaronjohnson' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
					</div><div class="clear"></div>
				</div><!-- #post-## -->

<?php endwhile; // end of the loop. ?>
<?php
get_footer();
?>

<?php
get_header();
?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="grid_7">
					<?php if (has_post_thumbnail()){
						the_post_thumbnail( 'single-project-thumbnail' );
					} else {
					?>test<?php
					}
					?>
</div>
					<div class="grid_5">
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'aaronjohnson' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'aaronjohnson' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
					</div>
				</div><!-- #post-## -->

<?php endwhile; // end of the loop. ?>
<?php
get_footer();
?>
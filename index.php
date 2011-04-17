<?php get_header(); ?>
<div id="feature">

</div>
<h3>Recent <em>Projects</em></h3>
<?php
query_posts( array('post_type' => 'project'));
if (have_posts()){
	while (have_posts()){
		the_post();
		if (has_post_thumbnail()){
			?>
			<div class="grid-cell">
			<a class="thumbnail-link"  href="<?php the_permalink(); ?>"><?php
			the_post_thumbnail('project-grid-thumbnail', array(
				'title' => $post->post_title,
				'alt' => $post->post_title
			));
			?></a></div>
			<?php
		}
	}
}
?>

<?php get_footer(); ?>

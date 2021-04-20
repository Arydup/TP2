<?php
/**
 * Template part pour afficher des blocs front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */
?>

<article>
	<a href="<?php echo get_permalink();?>"><?php the_post_thumbnail('thumbnail');?>
	<div class="galerie_info">
		<?php the_title()?>
		<?php the_content(); ?>
	</div>

	<div class="description">
	<?php the_author(); ?>
	<?php echo str_replace("Projet_", "", get_the_title())?>
	</div>
</article>
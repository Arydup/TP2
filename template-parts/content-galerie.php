<?php
/**
 * Template part pour afficher des blocs front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */
	global $tPropriété;
?>

<article>
	<a href="<?php echo get_permalink();?>"><?php the_post_thumbnail('thumbnail');?>
	<div class="galerie_info">
		<?php the_title()?>
	</div>
</article>
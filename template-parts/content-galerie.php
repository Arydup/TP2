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
	<div class="flip-card">
  		<div class="flip-card-inner">
    		<div class="flip-card-front">
				<?php the_post_thumbnail('thumbnail');?>
    		</div>
    		<div class="flip-card-back">
      			<h1><a href="<?php echo get_permalink();?>"><?php echo str_replace("Projet_", "", get_the_title())?></h1>
      			<p><?php the_content();?></p>
     	 		<p><?php the_author();?></p>
    		</div>
  		</div>
	</div>
</article>
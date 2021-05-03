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
				<?php the_post_thumbnail('medium');?>
    		</div>
    		<div class="flip-card-back">
      			<h1><a href="<?php echo get_permalink();?>"><?php echo str_replace("Projet_", "", get_the_title());?></h1>
      			<p><?php echo get_the_excerpt();?></p>
     	 		<p><?php if(get_field('auteur')!= "") : echo get_field('auteur'); endif;?></p>
    		</div>
  		</div>
	</div>
</article>
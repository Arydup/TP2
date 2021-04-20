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

<article class="slide__conteneur">
	<div class="slide" id="<?= $tPropriété['typeCours']?>">
		<?php the_post_thumbnail( 'thumbnail ');?>
		<div class="slide__info">
			<p><?php echo $tPropriété['sigle'] . " - " . $tPropriété['nbHeures'] . " - " . $tPropriété['typeCours']; ?></p>
			<a href="<?php echo get_permalink();?>"><?php echo $tPropriété['titre']; ?></a>
			<p>Session : <?php echo $tPropriété['session']; ?></p>
		</div>
	</div>
</article>
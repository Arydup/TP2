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

<article class="<?= $tPropriété['typeCours']=='Image 2d/3d'? 'Image_2d_3d': $tPropriété['typeCours']; ?>">
	<div>
		<p><?php echo $tPropriété['sigle'] . " - " . $tPropriété['nbHeures'] . " - " . $tPropriété['typeCours']; ?></p>
		<a href="<?php echo get_permalink();?>"><?php echo $tPropriété['titre']; ?></a>
		<p>Session : <?php echo $tPropriété['session']; ?></p>
	</div>
</article>
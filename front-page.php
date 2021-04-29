<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

get_header();
?>

<!------------------------------------------------------------------------------
Ancien Carroussel
------------------------------------------------------------------------------->
<!--?php $tous_les_cours = ["Web", "Spécifique", "Jeu", "Image 2d/3d", "Conception"]?>

		Début du caroussel
		<section class="caroussel">
			?php
				foreach($tous_les_cours as $cours): ?>
					<div><a href="#?= /*$cours; ?>">?= $cours;?></a></div>
			?php/* endforeach; ?>
		</section>
		Faire une boucle pour voir chaque div présente
		<section class="lesBoutons">
			?php
				foreach($tous_les_cours as $cours): ?>
					<input type="radio" id="?= array_search($cours, $tous_les_cours); ?>" name="chiffreBouton" value="?= array_search($cours, $tous_les_cours); ?>">
				?php endforeach; ?>
		</section>
		-->
		<!--
		<section class="caroussel2">
		<article class="slide__conteneur">
			<div class="slide">
				<img src="" alt="">
				<div class="slide__info">
					<p>582-1W1 - 75h - Web</p>
					<a href="http://localhost/4w4/2020/10/07/582-1w1-mise-en-page-web-75h/">Mise en page Web</a>
					<p>Session : 1</p>
				</div>
			</div>
		</article>
		<article>2</article>
		<article>3</article>
		</section>

		<section class="ctrl-carroussel">
			<input type="radio" name="rad-carroussel">
			<input type="radio" name="rad-carroussel">
			<input type="radio" name="rad-carroussel">
		</section>
				-->

<!------------------------------------------------------------------------------
liste des cours et des posts
------------------------------------------------------------------------------->
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<h1 class="page-title">Accueil</h1>
				<?php
				/*the_archive_title( '<h1 class="page-title">', '</h1>' );*/
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<section class="liste-cours">
			<?php
			/* Start the Loop */
			$ctrl_radio = "";
            $precedant = "XXXXXX";
			while ( have_posts() ) :
				the_post();

				convertir_tableau($tPropriété);
				if($precedant != $tPropriété['typeCours']) : ?> 
					<?php if($precedant != 'XXXXXX') :?>

					</section>
								
					<?php endif ?>

					<?php if(in_array($precedant, ['Web', 'Jeu'])) :?>
						<section class="ctrl-carroussel">
							<?php echo($ctrl_radio);
							$ctrl_radio='';
							?>
						</section>
					<?php endif; ?>
					
					<h2 id="<?= $tPropriété['typeCours']?>"><?php echo $tPropriété['typeCours']?></h2>
					<section <?php echo class_composant($tPropriété['typeCours']) ; ?>>
					<!--(in_array($tPropriété['typeCours'], ['Web', 'Jeu'])? 'class="carroussel2"' : 'class="bloc"')-->
					
				<?php endif; ?>
			<?php 
				if(in_array($tPropriété['typeCours'], ['Web', 'Jeu'])) :
					get_template_part( 'template-parts/content', 'carroussel' );
					$ctrl_radio .= '<input type="radio" name="rad-'.$tPropriété['typeCours'].'">';

				elseif($tPropriété['typeCours'] == 'Projets') :
					get_template_part( 'template-parts/content', 'galerie');

				else :
					get_template_part( 'template-parts/content', 'bloc' );
				endif;
				$precedant = $tPropriété['typeCours'];
			
			endwhile;?>
			
            </section>

			<section class="nouvelles">
				
				<section></section>
			</section>
		<?php endif; ?>
		

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();

function convertir_tableau(&$tPropriété){
	$titre_grand = get_the_title();
	$tPropriété['session'] = substr($titre_grand, 4, 1 );
	$tPropriété['nbHeures'] = substr($titre_grand, -4, 3);
	$tPropriété['titre'] = substr($titre_grand, 8, -6);
	$tPropriété['sigle'] = substr($titre_grand, 0, 7);
	$tPropriété['typeCours'] = get_field('type_de_cours');
}

function class_composant($typeCours){
	if(in_array($typeCours, ['Web', 'Jeu'])){
		return 'class="carroussel2"';
	}
	elseif($typeCours == 'Projets'){
		return 'class="galerie"';
	}
	else{
		return 'class="bloc"';
	}
	//(in_array($tPropriété['typeCours'], ['Web', 'Jeu'])? 'class="carroussel2"' : 'class="bloc"')
}

?>

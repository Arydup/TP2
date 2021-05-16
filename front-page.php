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
liste des cours et des posts
------------------------------------------------------------------------------->
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			
			<section id="annonce">
			
			</section>

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
					
				<?php endif; ?>
			<?php 
				if(in_array($tPropriété['typeCours'], ['Web', 'Jeu'])) :
					get_template_part( 'template-parts/content', 'carroussel' );
					$ctrl_radio .= '<input type="radio" name="rad-'.$tPropriété['typeCours'].'">';

				elseif($tPropriété['typeCours'] == 'Projets personnels') :
					get_template_part( 'template-parts/content', 'galerie');

				else :
					get_template_part( 'template-parts/content', 'bloc');
				endif;
				$precedant = $tPropriété['typeCours'];
			
			endwhile;?>
			
            </section>

		<?php endif; ?>

		<section class="admin-rapide">
		<h3>Ajouter un article de catégorie nouvelles</h3>
			<input type="text" name="title" placeholder="Titre">
			<textarea name="content"></textarea>
			<button id='bout-rapide'>Créer une nouvelle</button>
		</section>

		<section class="nouvelles">	
			<section></section>
		</section>
		

	</main><!-- #main -->

<?php
get_sidebar();
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
	elseif($typeCours == 'Projets personnels'){
		return 'class="galerie"';
	}
	else{
		return 'class="bloc"';
	}
}

?>

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-4w4
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="ligne-footer"> 
			<?php if(is_active_sidebar('footer-1')):?>
				<?php dynamic_sidebar('footer-1');?>
			<?php endif;?>
		</div>

		<div class="ligne-footer">
			<?php if(is_active_sidebar('footer-2')):?>
				<?php dynamic_sidebar('footer-2');?>
			<?php endif;?>
		</div>
		

		<div class="site-info">
			<!--<a href="<?php// echo esc_url( __( 'https://wordpress.org/', 'theme-4w4' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'theme-4w4' ), 'WordPress' );
				?>
			</a>-->
			<hr>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'theme-4w4' ), 'theme-4w4', '<a href="http://underscores.me/">Aryane Duperron</a>' );
				?>
			<a href="https://cmaisonneuve.qc.ca">Collège de Maisonneuve</a>
			<p>Page créée par Aryane Duperron</p>
				
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

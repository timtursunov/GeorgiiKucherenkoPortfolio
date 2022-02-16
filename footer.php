<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package georgii
 */

?>

	<footer id="colophon" class="site-footer">
		<?php if ( is_page('about')) : ?>
			<p class='footer--about'>
			designed and developed my Tim Tursunov
			</p>
		<?php endif; ?>
		<?php if ( is_page('contacts') || is_home()) : ?>
			<p>
			designed and developed my Tim Tursunov
			</p>
		<?php endif; ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package georgii
 */

get_header();
?>
	<main id="primary" class="site-main">
		<div class='filter'>
			<ul class='filter__list'>
				<li class='filter__item'> 
					<a href="">pictures</a>
				</li>
				<li class='filter__item'>
					<a href="">videos</a>
				</li>
			</ul>
		</div>
		<div class='titles'>
			<ul class='titles__list'>
				<li class='title__item'>
					<a href="">Project one long title</a>
				</li>
				<li class='title__item'>
					<a href="">Project two long title</a>
				</li>
				<li class='title__item'>
					<a href="">Project three long title</a>
				</li>
				<li class='title__item'>
					<a href="">Project four long title</a>
				</li>
				<li class='title__item'>
					<a href="">Project five long title</a>
				</li>
				<li class='title__item'>
					<a href="">Project five long title</a>
				</li>
				<li class='title__item'>
					<a href="">Project five long title</a>
				</li>
				<li class='title__item'>
					<a href="">Project five long title</a>
				</li>
			</ul>
		</div>
		<div class='image__preview'>

		</div>

		<?php query_posts('posts_per_page=10&category_name=photo&orderby=asc'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class='site-hero__overlay '>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<a href="<?php echo get_permalink(); ?>">
									<img class='site-hero__img' src="<?php echo $url ?>" />
								</a>
							</div>
					<?php
					endwhile; 
				endif; 
				?>
	</main><!-- #main -->
<?php
// get_sidebar();
get_footer();

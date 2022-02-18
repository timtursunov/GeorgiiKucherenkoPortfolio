<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package georgii
 */

get_header();
?>

	<?php if ( is_page('about')) : ?>
		<div class='about'>
			<div class='about__text-section'>
				<p class='about__text'>
					I want to deliver projects aimed to bring a positive impact on our lives over gaining a profit only. For this matter, I experiment with narrative styles and commonly focus on including the entertainment elements into the projects. It ensures a greater engagement from the audience whether the goal of the projects is to educate or amuse. 	
				</p>
				<p class='about__text'>
					In general, my goal is to transform the way people see the world through film/photography. I find it meaningful to work for a company that encourages people to do the same thing within the reach of their cellphone camera. iPhone Photography School can be a great carrier of positive changes in society.
				</p>
				<p class='about__text'>
					Upon discovering the Iphone's Photography School mission, I found it worthwhile to foster my editing and narration skills in this organization. I believe that initiative to inspire people to appreciate Nature's beauty consolidates the efforts to stop climate change. It merely encourages employees to apply pragmatism and seek innovations.
				</p>
			</div>
			<div class='about__img'>

			</div>
			
		</div>
	<?php endif; ?>
	<?php if ( is_page('contacts')) : ?>
		<div class='contact'>
			<div class='contact__text-box'>
				<p class='contact__text'>
					Would <span>you</span>  like to know more?
					Let’s get in touch...
				</p>
			</div>
			<div class='contact-menu'>
				<div class='contact-socials'>
					<a class='contact__phone'>+ 1 (416) 999 - 99 - 99</a>
					<a class href="">email</a>
				</div>
				<div class='contact-socials'>
					<a href="">facebook</a>
					<a href="">linkedIn</a>
					<a href="">instagram</a>
				</div>
			</div>

		</div>

	<?php endif; ?>
<?php
get_footer();

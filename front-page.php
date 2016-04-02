<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>
<div class="front-page">
	<article>
		<div class="row">
			<div class="small-24 medium-centered columns">
				<?php while ( have_posts() ) : the_post(); ?>
       <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
       <div class="entry-content">
           <?php the_content(); ?>
       </div>
 <?php endwhile;?>
			</div>
		</div>
		<footer>
			<nav>
				<?php front_page_nav(); ?>
			</nav>
		</footer>
	</article>
  	<aside class="show-for-medium"></aside>
</div> <!-- / .front-page -->

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

</body>
</html>
 

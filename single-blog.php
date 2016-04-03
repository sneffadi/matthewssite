<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="single-post" class="row" >
<div class="small-24 medium-18 columns">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php foundationpress_entry_meta(); ?>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content">

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="row">
				<div class="column">
					<?php the_post_thumbnail( '', array('class' => 'th') ); ?>
				</div>
			</div>
		<?php endif; 
			echo 'here is the thing';
			var_dump(comments_open());
		?>


		<?php the_content(); ?>
		<?php do_action( 'foundationpress_post_before_comments' ); ?>
		<?php comments_template( '', true ); ?>
		<?php do_action( 'foundationpress_post_after_comments' ); ?>
		</div>
		
	</article>
<?php endwhile;?>
</div>
<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_sidebar(); ?>

</div><!-- end .row -->
<?php get_footer(); ?>

<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar medium-6 columns show-for-medium">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<div class="row">
		<div class="small-24 columns">
			<div class="recent">
				<h3>Recent Posts</h3>
				<?php 
					$args = array(
						'posts_per_page' => 5,
						'post_type' => 'blog'
					);
					$query = new WP_Query( $args );
					if($query->have_posts()) {
						echo '<ul>';
						while ($query->have_posts()){
							$query->the_post();
							echo '<li><a href="'. get_permalink() .'">' . get_the_title() . '</a></li>';

						}
						echo '</ul>';
					} else {
						//no posts found
					}
					/* Restore original Post Data */
					wp_reset_postdata();
				?>
				<a href="<?php echo home_url('/'); ?>blog">All Blog Posts &raquo;</a>
			</div>
			<div class="social">
				<h3>Social Media</h3>
				<a href="https://www.facebook.com/jelaliam/"><i class="fa fa-facebook-official"></i></a>
				<a href="https://twitter.com/jelaliam?lang=en"><i class="fa fa-twitter-square"></i></a>
			</div>
		</div>
	</div>
	
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>

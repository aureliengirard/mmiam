<?php

/**
 * Class MyRecentPosts
 * Extend Recent Posts Widget
 * Adds different formatting to the default WordPress Recent Posts Widget
 */
class MyRecentPosts extends \WP_Widget_Recent_Posts {
	function widget($args, $instance) {
	
		extract( $args );
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);
				
		if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
			$number = 10;
					
		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true, 'post__not_in' => array (get_the_ID()), ) ) );
		
		if( $r->have_posts() ) :
			
			echo $before_widget;
			if( $title ) echo $before_title . $title . $after_title; ?>
			<ul>
				<?php while( $r->have_posts() ) : $r->the_post(); ?>				
				<li>
					
					<?php if ( has_post_thumbnail() ) { ?>
						<a class="post-thumbnail" href="<?php the_permalink(); ?>">
							<?php echo get_the_post_thumbnail( get_the_ID(), 'sidebar-thumbnail', array( 'class' => 'img-fluid' ) ); ?>
						</a>
					<?php } ?>

					<div class="post-date">
						<time class="entry-date" datetime="<?php echo esc_attr( get_the_time( 'c' ) ); ?>">
							<?php echo get_the_date(); ?>
						</time>
					</div>

					<h4 class="post-title">
						<a href="<?php the_permalink(); ?>">
							
							<?php if( get_field('post_subtitle') ): ?>
								<?php the_title(); ?><?php echo ': ' . get_field('post_subtitle'); ?>							
							<?php else: ?>
								<?php the_title(); ?>
							<?php endif; ?>
						</a>
					</h4>
				</li>
				<?php endwhile; ?>
			</ul>
			 
			<?php
			echo $after_widget;
		
		wp_reset_postdata();
		
		endif;
	}
}

function my_recent_post_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('MyRecentPosts');
}
add_action('widgets_init', __NAMESPACE__ . '\\my_recent_post_widget_registration');
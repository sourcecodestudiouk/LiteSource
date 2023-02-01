<?php get_header(); ?>
	<main>
		<?php get_template_part('templates/page-header'); ?>
		<?php get_template_part('templates/single-' . get_post_type()); ?>
		<div class="related-content">
	    <?php
	    $currentID = get_the_ID();
	    $args = array('post_type' => get_post_type(), 'posts_per_page' => '4', 'post_not_in' => array($currentID));
	    $post_query = new WP_Query($args);
	    if($post_query->have_posts() ) {
	      while($post_query->have_posts() ) { $post_query->the_post();?>
	        <a href="<?php the_permalink(); ?>">
	          <article class="related-post">
	            <h3><?php the_title(); ?></h3>

	          </article>
	        </a>
	        <?php
	      }
	    }
	    wp_reset_postdata();
	    ?>
	  </div>
	</main>
<?php get_footer(); ?>

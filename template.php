<?php
/*
Template Name: Random Page Template
*/
?>
<?php get_header(); ?>


			<div class="container"><?php the_title(); ?>.</div>

<div class="container documents">

	<div class="row">
		<div class="col-lg-12">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<!--<h1><?php //the_title(); ?></h1>
			<h4>Posted on <?php //the_time('F jS, Y') ?></h4> <p></p> <hr>  -->
			<?php the_content(__('(more...)')); ?>
			
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		</div>

	</div>
</div>
<div class="container"><h2>Thanks for watching!</h2><p>I hope you will enjoy this new product, and if you use it, do not forget to share your projects with us. I love to see all the great things you are working on!</p></div>
<?php get_footer(); ?>
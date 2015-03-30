<?php get_header(); ?>
<div class="container documents">
	<div class="row">
		<div class="col-lg-9 col-md-7">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<h4>Posted on <?php the_time('F jS, Y') ?></h4>
			<p><?php the_content(__('(more...)')); ?></p>
			<hr> <?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		</div>
		<div class="col-lg-3 col-md-5">
		<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
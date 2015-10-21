<?php get_header(); ?>

<?php
	if(have_posts()):
	while(have_posts()):
		the_post();
?>

<article class="section post post-index">
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<div class="meta">
		<strong>Posted:</strong> <?php the_time('l, F jS, Y') ?>
	</div>
	<div class="content">
    <?php
      if (has_excerpt()) {
        the_excerpt();
			?>
        <a href="<?php the_permalink(); ?>"><?php _e('Continue reading');?></a>
			<?php
      } else {
        the_content();
      }

    ?>
	</div>
</article>


<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

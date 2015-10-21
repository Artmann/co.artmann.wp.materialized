<?php get_header(); ?>

<?php
  if(have_posts()):
  while(have_posts()):
    the_post();
?>

<article class="section post">
  <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
  <div class="meta">
    <strong>Posted:</strong> <?php the_time('l, F jS, Y') ?>
  </div>
  <div class="content">
    <?php the_content(); ?>
  </div>
</article>

<div class="comment-section">
	<?php comments_template(); ?>
</div>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>


<?php get_header(); ?>
<h2><?php post_type_archive_title(); ?></h2>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<article>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php the_excerpt(); ?>
</article>
<?php endwhile; else: ?>
<p><?php _e('No courses found.', 'yektatheme'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

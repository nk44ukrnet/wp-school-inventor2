<?php
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="content-size padding-mobile" style="padding-top: 5rem; padding-bottom: 5rem;">
        <h1 style="font-size: 4rem; font-weight: 600;"><?php echo get_the_title(); ?></h1>
        <section style="padding-top: 3rem;">
            <?php the_content(); ?>
        </section>
    </div>
<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

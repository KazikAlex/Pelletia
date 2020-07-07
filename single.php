<?php get_header(); ?>

<?php wp_reset_query()?>

<div class="single_wrapper">
    <?php if( have_posts() ) : ?>
    <div class="container">             
        <?php while ( have_posts() ) : the_post();?>    
        <div class="single_item">
            <div class="single_item_img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
            <div class="single_item_date"><?php the_time('d.m.Y'); ?></div>
            <div class="single_item_descr"><?php the_content(); ?></div>     
        </div>
        <?php endwhile; ?>
        <?php wp_reset_query()?>
    </div>
    <?php else: ?>
    <?php endif; ?>
    <?php wp_reset_query()?>
</div>




<?php get_template_part( 'notdecide' ); ?>

<?php get_template_part( 'wantnews' ); ?>

<?php get_footer();?>
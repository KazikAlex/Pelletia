<?php
/*
 * Template Name: Фотогалерея
*/

?>

<?php get_header(); ?>

<?php wp_reset_query()?>

<div class="page">
    <div class="container">
        <div class="page_title"><?php the_title() ?></div>
        <?php $photo = new WP_Query(array('post_type' => 'photo', 'posts_per_page' => 9));?>                
        <?php if( $photo->have_posts() ) : ?> 
                <div class="news-wrapper">
                    <?php while ( $photo->have_posts() ) : $photo->the_post(); ?>    
                        <div class="photo_item">
                            <div class="news_item_img"><?php the_post_thumbnail('full'); ?></div> 
                        </div>
                    <?php endwhile; ?>
                </div>  
        <?php else: ?>
            <p>Место под слайдер</p>
        <?php endif; ?>
        <?php wp_reset_query()?>
    </div>
</div>


<?php get_template_part( 'notdecide' ); ?>

<?php get_template_part( 'wantnews' ); ?>

<?php get_footer();?>
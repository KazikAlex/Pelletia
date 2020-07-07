<?php
/*
 * Template Name: Партнеры
*/

?>

<?php get_header(); ?>

<?php wp_reset_query()?>

<div class="page">
    <div class="container">
        <div class="page_title">Информация о партнерах и для партнеров</div>
        <?php $partners = new WP_Query(array('post_type' => 'partners', 'orderby' => 'comment_count'));?>                
        <?php if( $partners->have_posts() ) : ?> 
                    <?php while ( $partners->have_posts() ) : $partners->the_post(); ?>    
                        <div class="partners_item">
                            <!-- <div class="partners_item_wrapper"> -->
                                <div class="partners_item_title"><?php the_title(); ?></div>
                                <div class="partners_item_descr"><?php the_content(); ?></div>     
                            <!-- </div>              -->
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
        <?php else: ?>
            <p>Место под слайдер</p>
        <?php endif; ?>
        <?php wp_reset_query()?>
    </div>
</div>

<?php get_template_part( 'notdecide' ); ?>

<?php get_template_part( 'wantnews' ); ?>

<?php get_footer();?>
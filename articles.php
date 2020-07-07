<?php
/*
 * Template Name: Статьи
*/

?>

<?php get_header(); ?>

<?php wp_reset_query()?>

<div class="page">
    <div class="container">
        <div class="page_title"><?php the_title() ?></div>
        <?php $articles = new WP_Query(array('post_type' => 'articles'));?>                
        <?php if( $articles->have_posts() ) : ?> 
                <div class="news-wrapper">
                    <?php while ( $articles->have_posts() ) : $articles->the_post(); ?>    
                        <div class="news_item">
                            <div class="news_item_img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
                            <div class="news_item_date"><?php the_time('d.m.Y'); ?></div>
                            <div class="news_item_descr"><?php the_content(); ?></div>                                      
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
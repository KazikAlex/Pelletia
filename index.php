<?php
/*
 * Template Name: Каталог
*/

?>

<?php get_header(); ?>

<?php wp_reset_query()?>

<div class="page">
    <div class="container">
        <div class="page_title"><?php the_title() ?></div>
        <?php $products = new WP_Query(array('post_type' => 'products', 'posts_per_page' => 9));?>                
        <?php if( $products->have_posts() ) : ?> 
                    <?php while ( $products->have_posts() ) : $products->the_post(); ?>    
                        <div class="products_item">
                            <div class="products_item_img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
                            <div class="products_item_wrapper">
                                <div class="products_item_title"><?php the_title(); ?></div>
                                <div class="products_item_descr"><?php the_content(); ?></div>     
                            </div>             
                        </div>
                    <?php endwhile; ?>
        <?php else: ?>
            <p>Место под слайдер</p>
        <?php endif; ?>
        <?php wp_reset_query()?>
    </div>
</div>

<?php get_template_part( 'notdecide' ); ?>

<div class="news-carousel">
    <div class="container">
        <div class="page_title">Новости</div>
        <?php $news = new WP_Query(array('post_type' => 'news'));?>
        <?php if( $news->have_posts() ) : ?> 
            <div class="news-carousel_wrapper">
                <?php while ( $news->have_posts() ) : $news->the_post(); ?>
                    <div class="news-carousel_item">
                        <div class="news-carousel_img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
                        <div class="news-carousel_date "><?php the_time('d.m.Y'); ?></div>
                        <div class="news-carousel_descr"><?php the_excerpt(); ?></div>     
                    </div>                  
                <?php endwhile; ?>               
            </div>  
        <?php else: ?>
            <p>Место под слайдер</p>
        <?php endif; ?> 
        <?php wp_reset_query()?>
        <div class="carousel-dots">
            <button class="prev"></button>
            <button class="green"></button>
            <button class="next"></button>
        </div>
    </div>
</div>


<?php get_template_part( 'wantnews' ); ?>

<?php get_footer();?>

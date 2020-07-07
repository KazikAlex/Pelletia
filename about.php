<?php
/*
 * Template Name: О компании
*/

?>

<?php get_header(); ?>

<?php wp_reset_query()?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post();?>
    <div class="container">
        <div class="about"><?php the_content(); ?></div>       
    </div>
        
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

<div class="page">
    <div class="container">
        <div class="page_title">История</div>
        <?php $history = new WP_Query(array('post_type' => 'history'));?>                
        <?php if( $history->have_posts() ) : ?> 
            <?php while ( $history->have_posts() ) : $history->the_post(); ?>    
                <div class="history_item">
                    <div class="history_item_img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
                    <div class="history_item_wrapper">
                        <div class="products_item_title"><?php the_title(); ?></div>
                        <div class="products_item_descr"><?php the_content(); ?></div>     
                    </div>             
                </div>
                    <?php endwhile; ?>
        <?php else: ?>
            <p>Место для публикаций</p>
        <?php endif; ?>
        <?php wp_reset_query()?>
    </div>
</div>



<?php get_template_part( 'notdecide' ); ?>

<?php get_template_part( 'wantnews' ); ?>

<?php get_footer();?>
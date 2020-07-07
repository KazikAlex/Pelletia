<?php
/*
 * Template Name: О нас
*/

?>

<?php get_header(); ?>

<?php wp_reset_query()?>

<div class="why-we">
    <div class="container">
        <div class="page_title">Почему мы</div>
        <div class="why-we_wrapper">
            <div class="why-we_item">
                <div class="why-we_item_img"><img src="<?php bloginfo( 'template_url' )?>/icons/why-we_1.png" alt="минимальные требования"></div>
                <div class="why-we_item_descr">Минимальные требования к размерам производственного помещения </div>
            </div>
            <div class="why-we_item">
                <div class="why-we_item_img"><img src="<?php bloginfo( 'template_url' )?>/icons/why-we_2.png" alt="минимальные потребление энергии"></div>
                <div class="why-we_item_descr">Минимальное энергопотребление</div>
            </div>
            <div class="why-we_item">
                <div class="why-we_item_img"><img src="<?php bloginfo( 'template_url' )?>/icons/why-we_3.png" alt="высокотехнологичное исполнение"></div>
                <div class="why-we_item_descr">Высокотехнологичное исполнение из улучшенных материалов</div>
            </div>
            <div class="why-we_item">
                <div class="why-we_item_img"><img src="<?php bloginfo( 'template_url' )?>/icons/why-we_4.png" alt="простота обслуживания"></div>
                <div class="why-we_item_descr">Простота в обслуживании и высокая надёжность в работе </div>
            </div>
            <div class="why-we_item">
                <div class="why-we_item_img"><img src="<?php bloginfo( 'template_url' )?>/icons/why-we_5.png" alt="высокое качество"></div>
                <div class="why-we_item_descr">Высокое качество выпускаемой продукции</div>
            </div>
        </div>
    </div>
</div>

<div class="reviews">
    <div class="container">
        <div class="reviews_title">Отзывы</div>

        <?php $reviews = new WP_Query(array('post_type' => 'reviews'));?>
        <?php if( $reviews->have_posts() ) : ?> 
            <div class="reviews-carousel_wrapper-for">
                <?php while ( $reviews->have_posts() ) : $reviews->the_post(); ?>
                    <div class="reviews-carousel_item">
                        <div class="reviews-carousel_item_descr"><?php the_content(); ?></div> 
                        <div class="reviews-carousel_line"></div>    
                        <div class="reviews-carousel_item_title"><?php the_title(); ?></div>                  
                    </div> 
                <?php endwhile; ?>    
            </div>             
        <?php else: ?>
            <p>Место под слайдер</p>
        <?php endif; ?>


        <?php $reviews1 = new WP_Query(array('post_type' => 'reviews'));?>
        <?php if( $reviews1->have_posts() ) : ?> 

            <div class="reviews-carousel_wrapper-nav">
                <?php while ( $reviews1->have_posts() ) : $reviews1->the_post(); ?>        
                    <div class="reviews-carousel_item">                       
                        <div class="reviews-carousel_img"><?php the_post_thumbnail('full'); ?></div>   
                    </div>             
                <?php endwhile; ?>   
            </div>
            
        <?php else: ?>
            <p>Место под слайдер</p>
        <?php endif; ?>
      





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
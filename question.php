<?php
/*
 * Template Name: Вопрос-Ответ
*/

?>

<?php get_header(); ?>

<?php wp_reset_query()?>

<div class="page">
    <div class="container">
        <div class="page_title">Часто задаваемые вопросы</div>
        <?php $question = new WP_Query(array('post_type' => 'question', 'orderby' => 'comment_count'));?>                
        <?php if( $question->have_posts() ) : ?> 
            <?php while ( $question->have_posts() ) : $question->the_post(); ?>    
                <!-- <div class="question_item"> -->
                    <div class="question_item">
                        <div class="question_item_title">Вопрос: <?php the_title(); ?></div>
                        <div class="question_item_descr">Ответ: <?php the_content(); ?></div>     
                    </div>             
                <!-- </div> -->
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
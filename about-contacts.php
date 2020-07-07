<?php
/*
 * Template Name: Контакты
*/

?>

<?php get_header(); ?>

<?php wp_reset_query()?>

<div class="page">
    <div class="container">
        <div class="page_title"><?php the_title() ?></div>
        <?php $contacts = new WP_Query(array('post_type' => 'contacts', 'posts_per_page' => 1));?>                
        <?php if( $contacts->have_posts() ) : ?> 
            <?php while ( $contacts->have_posts() ) : $contacts->the_post(); ?>    
                <div class="conacts_item">
                    <div class="conacts_item_wrapper">
                        <div class="conacts_item_phone">
                            <div class="conacts_item_title">Телефон</div>
                            <div class="conacts_item_phone_1"><a href="tel:<?php $phone1 = get_post_meta( $post->ID, 'phone1', true); echo $phone1;?>"><?php echo $phone1; ?></a></div>
                            <div class="conacts_item_phone_2"><a href="tel:<?php $phone2 = get_post_meta( $post->ID, 'phone2', true); echo $phone2;?>"><?php echo $phone2; ?></a></div>
                        </div>
                        <div class="conacts_item_mail">
                            <div class="conacts_item_title">Почта</div>
                            <div class="conacts_item_mail_link"><a href="mailto:<?php $mail = get_post_meta( $post->ID, 'mail', true); echo $mail;?>"><?php echo $mail; ?></a></div>
                        </div>
                        <div class="conacts_item_adress">
                            <div class="conacts_item_title">Адрес</div>
                            <div class="conacts_item_adress_dest"><?php $adress = get_post_meta( $post->ID, 'adress', true); echo $adress; ?></div>
                        </div>
                        <div class="conacts_item_social">
                            <div class="conacts_item_title">Мы в соц. сетях</div>
                            <div class="conacts_item_social_wrapper">
                                <div class="conacts_item_social_wk"><a href="<?php $vk = get_post_meta( $post->ID, 'vk', true); echo $vk; ?>"><img src="<?php bloginfo( 'template_url' )?>/icons/vk_black.png" alt="wk"></a></div>
                                <div class="conacts_item_social_instagam"><a href="<?php $inst = get_post_meta( $post->ID, 'inst', true); echo $inst; ?>"><img src="<?php bloginfo( 'template_url' )?>/icons/instagram_black.png" alt="instagram"></a></div>
                                <div class="conacts_item_social_facebook"><a href="<?php $face = get_post_meta( $post->ID, 'face', true); echo $face; ?>"><img src="<?php bloginfo( 'template_url' )?>/icons/facebook_black.png" alt="facebook"></a></div>
                            </div>
                        </div>
                    </div>   
                    <div class="contacts_item_img"><img src="<?php the_post_thumbnail('full'); ?>"></div>                                       
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Место под слайдер</p>
        <?php endif; ?>
        <?php wp_reset_query()?>
    </div>
</div>

<div class="town"><img src="<?php bloginfo( 'template_url' )?>/icons/town.png" alt="town"></div>

<?php get_template_part( 'wantnews' ); ?>

<?php get_footer();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
    
<?php $contacts = new WP_Query(array('post_type' => 'contacts', 'posts_per_page' => 1));?>                
    <?php if( $contacts->have_posts() ) : ?> 
        <?php while ( $contacts->have_posts() ) : $contacts->the_post(); ?>
            <header class="header">
                <div class="container">
                    <div class="header_wrapper">
                        <div class="header_logo">
                            <img src="<?php bloginfo( 'template_url' )?>/icons/pelletiaCzBy.png" alt="pelletiaCzBy">
                        </div>
                        <div class="header_contacts">
                            <div class="header_social">
                                <div class="header_social_wrapper">
                                    <div class="header_social_title">Мы в соц. сетях</div>
                                    <div class="conacts_item_social_wk"><a href="<?php $vk = get_post_meta( $post->ID, 'vk', true); echo $vk; ?>"><img src="<?php bloginfo( 'template_url' )?>/icons/vk.png" alt="wk"></a></div>
                                    <div class="conacts_item_social_instagam"><a href="<?php $inst = get_post_meta( $post->ID, 'inst', true); echo $inst; ?>"><img src="<?php bloginfo( 'template_url' )?>/icons/instagram.png" alt="instagram"></a></div>
                                    <div class="conacts_item_social_facebook"><a href="<?php $face = get_post_meta( $post->ID, 'face', true); echo $face; ?>"><img src="<?php bloginfo( 'template_url' )?>/icons/facebook.png" alt="facebook"></a></div>
                                </div>
                                <div class="header_social_mail"><a href="mailto:<?php $mail = get_post_meta( $post->ID, 'mail', true); echo $mail;?>"><?php echo $mail; ?></div> 
                            </div>
                            <div class="header_phone">
                                <a class="header_phone_item" href="tel:<?php $phone1 = get_post_meta( $post->ID, 'phone1', true); echo $phone1;?>"><?php echo $phone1; ?></a>
                                <a class="header_phone_item" href="tel:<?php $phone2 = get_post_meta( $post->ID, 'phone2', true); echo $phone2;?>"><?php echo $phone2; ?></a>
                                <a class="header_phone_item">Позвоните нам</a>
                            </div>
                        </div>                   
                    </div>
                    <div class="hamburger-menu" id="hamb">
                        <div class="hamburger">
                            <div class="hamburger-top" id="top"></div>
                            <div class="hamburger-middle" id="middle"></div>
                            <div class="hamburger-bottom" id="bottom"></div>
                        </div>
                    </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Место под слайдер</p>
    <?php endif; ?>
    <?php wp_reset_query()?>

    

    <?php wp_nav_menu(array('theme_location' => 'header_menu', 'depth' => 0, 'container' => 'div', 'container_class' => 'header_menu',)); ?>  
            
                </div>
            </header>

    <div class="main">
        <div class="container">
            <div class="main_title">При приобретении линий гранулирования, круглогодичный гарантированный сбыт по прямому экспортному контракту</div>
            <div class="main_news">
                <div class="main_news_item">
                    <div class="main_news_item_title">При приобретении линий гранулирования , круглогодичный гарантированный сбыт по прямому экспортному контракту</div>
                    <a href="#" class="main_news_item_link">Смотреть все новости<img src="<?php bloginfo( 'template_url' )?>/icons/right_arrow_green.png" alt="right_arrow"></a>
                </div>
                <div class="main_news_item">
                    <div class="main_news_item_title">Мы импортировали первую поставку отопительных пеллет, произведенных на наших предприятиях в Беларуси.</div>
                    <a href="#" class="main_news_item_link">Смотреть все новости<img src="<?php bloginfo( 'template_url' )?>/icons/right_arrow_green.png" alt="right_arrow"></a>
                </div>
                <div class="main_news_item">
                    <div class="main_news_item_title">Предоставим возможность  сбыта готовой продукции  на весь произведенный обьем по прямому экспортному контракту.</div>
                    <a href="#" class="main_news_item_link">Акция</a>
                </div>
            </div>
        </div>
        <div class="town"><img src="<?php bloginfo( 'template_url' )?>/icons/town.png" alt="town"></div>
    </div>

   

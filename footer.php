<footer class="footer">
    <div class="container">
        <div class="footer_wrapper">
            <div class="footer_logo">
                <img src="<?php bloginfo( 'template_url' )?>/icons/pelletiaCzBy.png" alt="pelletiaCzBy">
            </div>
        
            <?php wp_nav_menu(array('theme_location' => 'footer_menu', 'menu_class' => 'menu_foot', 'depth' => 0, 'container' => 'div', 'container_class' => 'footer_menu',)); ?>  

            <?php $contacts = new WP_Query(array('post_type' => 'contacts', 'posts_per_page' => 1));?>                
            <?php if( $contacts->have_posts() ) : ?> 
                <?php while ( $contacts->have_posts() ) : $contacts->the_post(); ?>   
                    <div class="footer_contacts">
                        <div class="footer_phone_item">Телефоны</div>
                        <div class="footer_phone_item">
                            <a href="tel:<?php $phone1 = get_post_meta( $post->ID, 'phone1', true); echo $phone1;?>"><?php echo $phone1; ?></a> 
                        </div>
                        <div class="footer_phone_item">
                            <a href="tel:<?php $phone2 = get_post_meta( $post->ID, 'phone2', true); echo $phone2;?>"><?php echo $phone2; ?></a>
                        </div>
                        <div class="footer_phone_item">
                            <a href="mailto:pelletia@pelletia.cz">pelletia@pelletia.cz</a>
                        </div>
                    </div>
                    
                    <div class="footer_cocial">
                        <div class="footer_social_title">Мы в соц. сетях</div>
                        <div class="footer_social_wrapper">
                            <div class="conacts_item_social_wk"><a href="<?php $vk = get_post_meta( $post->ID, 'vk', true); echo $vk; ?>"><img src="<?php bloginfo( 'template_url' )?>/icons/vk.png" alt="wk"></a></div>
                            <div class="conacts_item_social_instagam"><a href="<?php $inst = get_post_meta( $post->ID, 'inst', true); echo $inst; ?>"><img src="<?php bloginfo( 'template_url' )?>/icons/instagram.png" alt="instagram"></a></div>
                            <div class="conacts_item_social_facebook"><a href="<?php $face = get_post_meta( $post->ID, 'face', true); echo $face; ?>"><img src="<?php bloginfo( 'template_url' )?>/icons/facebook.png" alt="facebook"></a></div>
                        </div>
                        <div class="footer_social_politic">Политика конфиденциальности<br>Защиты персональных данных</div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?>
            <?php wp_reset_query()?>
        </div>
    </div>
    <a href="#" class="footer_up"><img src="<?php bloginfo( 'template_url' )?>/icons/up_arrow.png" alt="up_arrow"></a>
</footer>

<script src="<?php bloginfo('template_url')?>/js/jquery-1.12.0.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/jquery-migrate-1.4.1.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/slick.js"></script>
<script src="<?php bloginfo('template_url')?>/js/js.js"></script>

</body>
</html>
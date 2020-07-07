<div class="want-news">
    <div class="container">
        <form class="want-news_wrapper" action="<?php bloginfo( 'template_url' )?>/mailer/smart1.php" method="post">
            <div class="want-news_title">Хотите всегда быть в курсе наших новостей</div>
            <div class="want-news_subtitle">Подпишитесь</div>
            <div class="want-news_input">
                <input class="want-news_input_item" type="text" name="mailer" placeholder="Ваш e-mail">
                <button class="want-news_item_btn" id="want-btn" type="submit">Подписаться</button>
            </div>  
            <div class="thanks" id="thanks-you">
                <div class="thanks_close" id="thanks-close"><img src="<?php bloginfo( 'template_url' )?>/icons/cross.png" alt="close"></div>
                <div class="thanks_title">Спасибо, что оставили заявку на нашем сайте</div>
                <div class="thanks_subtitle">Мы свяжемся с вами в ближайшее время</div>
            </div>   
        </form> 
         
    </div>
</div>

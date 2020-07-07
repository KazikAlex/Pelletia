<div class="not-decide">
    <div class="container">
        <div class="not-decide_wrapper">
            <form  class="not-decide_form" action="<?php bloginfo( 'template_url' )?>/mailer/smart.php" method="post">
                <div class="not-decide_form_title">Не можете опраделиться?</div>
                <div class="not-decide_form_subtitle">Закажите консультацию </div>
                <input class="not-decide_form_input" type="text" name="name" placeholder="Имя*"> 
                <input class="not-decide_form_input" type="text" name="phone" placeholder="Телефон*"> 
                <button class="not-decide_form_btn" id="form_btn" type="submit">Получить консультацию</button>
            </form>
            <div class="not-decide_img"><img src="<?php bloginfo( 'template_url' )?>/icons/notdecide.png" alt="наш адрес"></div>
            <div class="thanks" id="thanks-you">
                <div class="thanks_close" id="thanks-close"><img src="<?php bloginfo( 'template_url' )?>/icons/cross.png" alt="close"></div>
                <div class="thanks_title">Спасибо, что оставили заявку на нашем сайте</div>
                <div class="thanks_subtitle">Мы свяжемся с вами в ближайшее время</div>
            </div>   
        </div>
    </div>
    <div class="town"><img src="<?php bloginfo( 'template_url' )?>/icons/town.png" alt="town"></div>
</div>
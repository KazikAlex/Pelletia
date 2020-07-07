// var sub = document.getElementByClassName('');

$('.news-carousel_wrapper').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrow: false,
    // focusOnSelect: true,
    // dots: true,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    responsive: [
      {
        breakpoint: 1080,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 860,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });


  $('.reviews-carousel_wrapper-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.reviews-carousel_wrapper-nav'
  });

  $('.reviews-carousel_wrapper-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.reviews-carousel_wrapper-for',
    arrows: false,
    dots: false,
    centerMode: true,
    focusOnSelect: true
  });

var menu = document.querySelector('.header_menu'),
    contact = document.querySelector('.header_contacts'),
    head = document.querySelector('.header'),
    ham = document.getElementById('hamb'),
    f_btn = document.getElementById('form_btn'),
    w_btn = document.getElementById('want-btn'),
    th_you = document.getElementById('thanks-you'),
    th_close = document.getElementById('thanks-close'),
    divTop = document.getElementById('top'),
    divMiddle = document.getElementById('middle'),
    divBottom = document.getElementById('bottom');
    

ham.addEventListener('click', function () {
  if (menu.style.display == 'block') {
      menu.style.display = 'none';
      contact.style.display = 'block';
      head.style.height = '91px';
      divTop.style.transform = 'rotate(0deg)';
      divTop.style.position = 'relative';
      divMiddle.style.transform = 'rotate(0deg)';
      divMiddle.style.position = 'relative';
      divBottom.style.display = 'block';
      divBottom.style.transform = 'rotate(0deg)';
      divBottom.style.position = 'relative';
      // mainSub.style.padding = '74px 0 0 0';
  }else {
      menu.style.display = 'block';
      head.style.height = '400px';
      contact.style.display = 'none';
      divTop.style.transform = 'rotate(45deg)';
      divTop.style.position = 'absolute';
      divTop.style.top = '6%';
      divMiddle.style.transform = 'rotate(-45deg)';
      divMiddle.style.position = 'absolute';
      divMiddle.style.top = '6%';
      divBottom.style.display = 'none';
      // mainSub.style.padding = '250px 0 0 0';
      menu.addEventListener('click', function () {
          menu.style.display = 'none';
          contact.style.display = 'block';
          head.style.height = '91px';
          divTop.style.transform = 'rotate(0deg)';
          divTop.style.position = 'relative';
          divMiddle.style.transform = 'rotate(0deg)';
          divMiddle.style.position = 'relative';
          divBottom.style.display = 'block';
          divBottom.style.transform = 'rotate(0deg)';
          divBottom.style.position = 'relative';
      });
    }  
  });


    



    if (f_btn != null) 
      f_btn.addEventListener('click', function () {
        if (th_you.style.display == 'block') {
            th_you.style.display = 'none';
            // tab.style.display = 'none';
            // desc.classList.add('active');
            // pr.classList.remove('active');  
        }else {
            // th_you.style.display = 'block';
            th_you.style.display = 'block';
            // pr.classList.add('active');
            // desc.classList.remove('active');
            th_close.addEventListener('click', function (){
              if (th_you.style.display == 'none') {
                th_you.style.display = 'block';
                  // cont.style.display = 'none';
                  // pr.classList.add('active');
                  // desc.classList.remove('active');
              }else {
                th_you.style.display = 'none';
                // tab.style.display = 'none';
                // desc.classList.add('active');
                // pr.classList.remove('active');
              }
            });
        }
      });

    if (w_btn != null) 
      w_btn.addEventListener('click', function () {
        if (th_you.style.display == 'block') {
            th_you.style.display = 'none'; 
        }else {
            th_you.style.display = 'block';
            th_close.addEventListener('click', function (){
              if (th_you.style.display == 'none') {
                  th_you.style.display = 'block';
              }else {
                th_you.style.display = 'none';
              }
            });
        }
      });

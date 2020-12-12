window.addEventListener('DOMContentLoaded', () => {

    

    window.onload = function () {
      document.body.classList.add('loaded_hiding');
      window.setTimeout(function () {
        document.body.classList.add('loaded');
        document.body.classList.remove('loaded_hiding');
      }, 500);
    }

    $('.review__slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: "<div id='prev' class='next-arrow'><img class='img-svg' src='src/img/icon/arrow.svg'></div>",
      nextArrow: "<div id='next' class='prev-arrow'><img class='img-svg' src='src/img/icon/arrow.svg'></div>",
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });

    $('img.img-svg').each(function(){
      var $img = $(this);
      var imgClass = $img.attr('class');
      var imgURL = $img.attr('src');
      $.get(imgURL, function(data) {
        var $svg = $(data).find('svg');
        if(typeof imgClass !== 'undefined') {
          $svg = $svg.attr('class', imgClass+' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
          $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }
        $img.replaceWith($svg);
      }, 'xml');
    });
})

  function menu() {
    const humburger = document.querySelector('.menu__humburger'),
    menu = document.querySelector('.menu__mobile'),
    close = document.querySelector('.menu__mobile--close');
    humburger.addEventListener('click', () => {
      menu.style.cssText = 'right: 0px'
    })
    close.addEventListener('click', () => {
      menu.style.cssText = 'right: -100%'
    })
  }
  menu();

const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    const menu = document.querySelector('.navigation-menu')
    menu.classList.toggle('navigation-menu_active')
    e.preventDefault()
    
    const blockID = anchor.getAttribute('href').substr(1)
    
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}
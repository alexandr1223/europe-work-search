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
      prevArrow: "<div id='prev' class='next-arrow'><img class='img-svg' src='img/icon/arrow.svg'></div>",
      nextArrow: "<div id='next' class='prev-arrow'><img class='img-svg' src='img/icon/arrow.svg'></div>",
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

  function modalShow(button, modal, oldModal) {
    document.querySelectorAll(button).forEach(item => {
      item.addEventListener('click', function(event) {
        if(oldModal) {
          if (document.querySelectorAll('.vacancies-block__title')) {
            document.querySelector('.modal-content__title').textContent = `${event.target.parentNode.parentNode.childNodes[1].textContent}`;
            document.querySelector(".modal-content__img--buy img").src = `${event.target.parentNode.parentNode.parentNode.childNodes[1].childNodes[1].getAttribute('src')}`;
            console.log();
            
          }
          document.querySelector(oldModal).style.cssText = 'opacity: 0; z-index: -1;';
        }
        if (modal) {
          console.log(document.querySelector('.modal-block__title'))
          document.querySelector('.modal-block__title').textContent = `${event.target.parentNode.parentNode.childNodes[1].textContent}`;
          document.querySelector(".modal-content__img img").src = `${event.target.parentNode.parentNode.parentNode.childNodes[1].childNodes[1].getAttribute('src')}`;
        }
        document.querySelector(modal).style.cssText = 'opacity: 1; z-index: 200;';
      })
    })
  }
  modalShow(".vacancies-buttons__info", ".modal--info");
  modalShow(".vacancies-buttons__buy", ".modal--buy", '.modal--info');

  function modalClose(button, modal) {
    document.querySelectorAll(button).forEach(item => {
      item.addEventListener('click', () => {
        document.querySelectorAll(modal).forEach(mod => {
          mod.style.cssText = 'opacity: 0; z-index: -1;';
        })
      })
    })
  }
  modalClose('.modal-block__close', '.modal')

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

// $(document).on('click', 'div[class^="vacancies-buttons"]', function(e) {
//   e.preventDefault();
//   console.log(e.target);
//   console.log(this);
//   alert('Вы кликнули по ссылке с классом ' + this.className);
// });
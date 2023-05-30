$(document).ready(function(){
  $('.accordion-list > li > .accordion-content').hide();
  $('.accordion-list > li').click(function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active").find(".accordion-content").slideUp();
    } else {
      $(".accordion-list > li.active .accordion-content").slideUp();
      $(".accordion-list > li.active").removeClass("active");
      $(this).addClass("active").find(".accordion-content").slideDown();
    }
    return false;
  });
  // swiper element
  const swiperEl = document.querySelector('swiper-container');
  // swiper parameters
  const swiperParams = {
    slidesPerView: 3,
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 3,
      },
    },
    on: {
      init() {
      },
    },
  };
  // now we need to assign all parameters to Swiper element
  Object.assign(swiperEl, swiperParams);
  // and now initialize it
  swiperEl.initialize();
});
const locationSlider = new Swiper ('.js-location-slider', {
  spaceBetween: 20,
  slidesPerView: 1,
  centeredSlidesBounds: true,
  navigation: {
    nextEl: '.slider__nav-next',
    prevEl: '.slider__nav-previous',
    disabledClass: 'slider__nav-button--disabled'
  },
  breakpoints: {
    460: {
      slidesPerView: 2,
      centeredSlides: false
    },
    768: {
      slidesPerView: 3,
      centeredSlides: false
    },
    1024: {
      slidesPerView: 4,
      centeredSlides: true
    },
    1260: {
      slidesPerView: 5,
      centeredSlides: true
    }
  }
})

const quoteSlider = new Swiper('.js-quote-slider', {
  slidesPerView: 1,
  loop: true,
  pagination: {
    el: '.quote-slider__pagination',
    clickable: true,
  },
})
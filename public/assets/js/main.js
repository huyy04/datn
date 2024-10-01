(function($) {
  "use strict";
  
  var $Window = $(window);

  // Css Function Js
    const $bgSelector = $("[data-bg-img]");
    $bgSelector.each(function (index, elem) {
      let element = $(elem),
        $bgSource = element.data('bg-img');
      element.css('background-image', 'url(' + $bgSource + ')');
    });

  // Offcanvas Nav Js
    var $offCanvasNav = $('.mobile-menu-items'),
    $offCanvasNavSubMenu = $offCanvasNav.find('.mobile-sub-menu');
    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="mobile-menu-expand"></span>');
    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();
    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .mobile-menu-expand, li .menu-title', function(e) {
      var $this = $(this);
      if($this.parent().attr('class')){
          if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('mobile-menu-expand'))) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length) {
              $this.parent('li').removeClass('active-expand');
              $this.siblings('ul').slideUp();
            } else {
              $this.parent('li').addClass('active-expand');
              $this.closest('li').siblings('li').find('ul:visible').slideUp();
              $this.closest('li').siblings('li').removeClass('active-expand');
              $this.siblings('ul').slideDown();
            }
          }
        }
      });

      $( ".mobile-sub-menu" ).parent( "li" ).addClass( "menu-item-has-children" );

  // Hero Slider JS
    var mainlSlider = new Swiper('.hero-slider-container', {
      slidesPerView : 1,
      slidesPerGroup: 1,
      loop: true,
      speed: 700,
      spaceBetween: 0,
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      navigation: {
        nextEl: '.hero-slider-button-next',
        prevEl: '.hero-slider-button-prev',
      },
      pagination: {
        el: '.hero-slider-pagination',
        clickable: true,
      }
    });

  // Hero Slider JS
    var mainlSlider2 = new Swiper('.hero-slider2-container', {
      slidesPerView : 1,
      slidesPerGroup: 1,
      centeredSlides: true,
      loop: true,
      spaceBetween: 10,
      speed: 700,
      navigation: {
        nextEl: '.hero-slider2-button-next',
        prevEl: '.hero-slider2-button-prev',
      },
      breakpoints: {
        1550: {
          spaceBetween: 70
        },
        1848: {
          spaceBetween: 200
        }
      }
    });

  // Blog Post Slider JS
    var blogPostlSlider = new Swiper('.blog-post-slider-container', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.blog-post-swiper-button-next',
            prevEl: '.blog-post-swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30
            }
        }
    });

  // Gallery Slider JS
    var gallerylSlider = new Swiper('.gallery-slider-container', {
      autoplay: {
        delay: 5000,
      },
      loop: true,
      slidesPerView : 4,
      slidesPerGroup: 1,
      spaceBetween: 30,
      speed: 500,
      navigation: {
        nextEl: '.gallery-swiper-button-next',
        prevEl: '.gallery-swiper-button-prev',
      },
      breakpoints: {
        1200: {
          slidesPerView : 4,
        },
        768: {
          slidesPerView : 3,
        },
        576: {
          slidesPerView : 2,
        },
        480: {
          slidesPerView : 1,
        },
        0: {
          slidesPerView : 1,
        },
      }
    });

  // Product Slider JS
    var productCarousel = new Swiper('.product-slider-container', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 15,
      navigation: {
        nextEl: '.product-swiper-button-next',
        prevEl: '.product-swiper-button-prev',
      },
      breakpoints: {
        576: {
          slidesPerView: 2
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 30
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 30
        }
      }
    });
    $(".product-slider-container").each(function(elem, target){
      var swp = target.swiper;
      $(this).hover(function() {
        swp.autoplay.stop();
      }, function() {
        swp.autoplay.start();
      });
    });

  // Product Slider JS
    var productSlider2 = new Swiper('.product-slider2-container', {
      autoplay: {delay: 7000,},
      loop: true,
      observer: true,
      observeParents: true,
      slidesPerView : 1,
      slidesPerGroup: 1,
      spaceBetween: 15,
      speed: 500,
      navigation: {
        nextEl: '.product2-swiper-button-next',
        prevEl: '.product2-swiper-button-prev',
      },
      breakpoints: {
        576: {
          slidesPerView: 2
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 30
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 30
        }
      }
    });
    $(".product-slider2-container").each(function(elem, target){
      var swp = target.swiper;
      $(this).hover(function() {
        swp.autoplay.stop();
      }, function() {
        swp.autoplay.start();
      });
    });

  // Product Slider JS
    var product2Slider = new Swiper('.product-slider-grid2-container', {
      slidesPerView: 1,
      grid: {
        rows: 2,
      },
      observer: true,
      observeParents: true,
      // loop: true,
      spaceBetween: 30,
      speed: 500,
      navigation: {
        nextEl: '.product-swiper2-button-next',
        prevEl: '.product-swiper2-button-prev',
      },
      breakpoints: {
        576: {
          slidesPerView: 2
        },
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 4,
        }
      }
    });

  // Deal Product Carousel
    var dealProductCarousel = new Swiper('.deal-product-carousel', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 30,
      navigation: {
        nextEl: '.deal-swiper3-button-next',
        prevEl: '.deal-swiper3-button-prev',
      },
      breakpoints: {
        576: {
          slidesPerView: 2
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 30
        }
      }
    });
    
  // Product Slider JS
    $('.group-product-slider').each(function(){
        const groupProductCarousel = new Swiper($(this)[0], {
          slidesPerView: 1,
          grid: {
            fill: 'row',
            rows: 4,
          },
          spaceBetween: 20,
          navigation: {
            nextEl: `#${$(this).data('nav-target')} .swiper-outer-button-next`,
            prevEl: `#${$(this).data('nav-target')} .swiper-outer-button-prev`,
          }
      });
    });

  // Feature Slider JS
    var featurelSlider = new Swiper('.feature-slider-container', {
      autoplay: {
        delay: 7000,
      },
      loop: true,
      slidesPerView : 1,
      slidesPerGroup: 1,
      spaceBetween: 30,
      speed: 500,
      navigation: {
        nextEl: '.feature-swiper-button-next',
        prevEl: '.feature-swiper-button-prev',
      },
      breakpoints: {
        576: {
         slidesPerView : 2, 
        },
        992: {
         slidesPerView : 3, 
        },
        1200: {
         slidesPerView : 4, 
        },
        1400: {
         slidesPerView : 5, 
        }
      }
    });

  // Single Product Thumbnail Carousel
    var productThumbCarousel = new Swiper('.product-thumb-carousel', {
      slidesPerView: 4,
      spaceBetween: 10,
      pagination: {
        el: '.product-thumb-carousel .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.product-thumb-carousel .swiper-button-next',
        prevEl: '.product-thumb-carousel .swiper-button-prev',
      }
    });

  // Single Product Image Slider
    var productImageSlider = new Swiper('.product-image-slider', {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: '.product-image-slider .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.product-image-slider .swiper-button-next',
        prevEl: '.product-image-slider .swiper-button-prev',
      },
      thumbs: {
        swiper: productThumbCarousel,
      },
    });

  // Single Product Thumbnail Carousel Vertical
    var productThumbCarouselVertical = new Swiper('.product-thumb-carousel-vertical', {
      direction: 'vertical',
      slidesPerView: 4,
      spaceBetween: 10,
      pagination: {
        el: '.product-thumb-carousel-vertical .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.product-thumb-carousel-vertical .swiper-button-next',
        prevEl: '.product-thumb-carousel-vertical .swiper-button-prev',
      }
    });

  // Single Product Image Slider Vertical
    var productImageSliderVertical = new Swiper('.product-image-slider-vertical', {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: '.product-image-slider-vertical .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.product-image-slider-vertical .swiper-button-next',
        prevEl: '.product-image-slider-vertical .swiper-button-prev',
      },
      thumbs: {
        swiper: productThumbCarouselVertical,
      },
    });

  // Testimonial Slider
    var testimonialSlider = new Swiper('.testimonial-slider', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 60,
      pagination: {
        el: '.testimonial-slider .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.testimonial-swiper-button-next',
        prevEl: '.testimonial-swiper-button-prev',
      }
    });

  // Tram Carousel
    var teamCarousel = new Swiper('.team-carousel', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 15,
        navigation: {
            nextEl: '.team-swiper-button-next',
            prevEl: '.team-swiper-button-prev',
        },
        breakpoints: {
            480: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        }
    });

  // Price Range
    if($('#price-range')) {
      $('#price-range').ionRangeSlider({
        type: "double",
        min: 0,
        max: 2000,
        from: 200,
        to: 1000,
        prefix: "$"
      });
    }

  // Sticky Sidebar
    $('.sidebar').stickySidebar({
        topSpacing: 60,
        bottomSpacing: 60
    });

  // LookBook JS
    var clothTag = $('.cloth-tag');
    clothTag.each(function(){
      var $this = $(this),
        topValue = $this.data('top'),
        leftValue = $this.data('left');
        $this.css({"top": topValue, "left": leftValue});
    });

  // click out side to close drone popup
    document.querySelectorAll(".cloth-tag-icon").forEach(function (ele) {
      ele.addEventListener("click", function () {
        const siblings = ele.parentElement.parentElement.children;
        Array.from(siblings, (sib) => {
          const menuCard = sib.querySelector(".cloth-tag-content");
          if (menuCard) menuCard.classList.add("invisible", "opacity-0");
        });
        if (ele.parentElement.lastElementChild.classList.contains("invisible")) {
          this.parentElement.lastElementChild.classList.add("invisible");
          this.parentElement.lastElementChild.classList.add("opacity-0");
          console.log();
          ele.parentElement.lastElementChild.classList.remove("invisible");
          ele.parentElement.lastElementChild.classList.remove("opacity-0");
        }
      });
    });
    $(".cloth-tag-content-close-icon").on("click", function () {
      $(".cloth-tag-content").addClass("opacity-0 invisible");
      $(".cloth-tag-content").removeClass("visible opacity-1");
    });
    $(".single-shoppable-img").on("click", function(){
      $(".cloth-tag-content").addClass("opacity-0 invisible");
    });

  // Countdown
    $('[data-countdown]').each(function() {
        var $this = $(this),
        $finalDate = $(this).data('countdown'),
        $template = `<div class="countdown-item"><span class="number">%D</span><span class="label">Days</span></div><div class="countdown-item"><span class="number">%H</span><span class="label">Hours</span></div><div class="countdown-item"><span class="number">%M</span><span class="label">Min</span></div><div class="countdown-item"><span class="number">%S</span><span class="label">Sec</span></div>`;
        $this.countdown($finalDate, function(e) {
            $this.html(e.strftime($template));
        });
    });

  // Image Zoom
    function imageZoom () {
        const $elem = $('.image-zoom'),
            $zoomImage = $('.image-zoom .zoomImg');
        if($Window.outerWidth() < 992) {
            if($zoomImage.length !== 0) {
                $elem.trigger('zoom.destroy');
            }
        } else {
            if($zoomImage.length === 0) {
                $elem.zoom();
            }
        }
    }
    imageZoom();

  // Product Quantity
    $('.product-quantity-count').on('click', '.qty-btn', function(e) {
        e.preventDefault()
        const $btn = $(this),
            $box = $btn.siblings('.product-quantity-box')[0];
        if($btn.hasClass('inc')) {
            $box.value = Number($box.value) + 1
        } else if($btn.hasClass('dec') && Number($box.value) > 1) {
            $box.value = Number($box.value) - 1
        }
    })

  // Checkout Toggle Active
    $('.checkout-coupon-active').on('click', function(e) {
      e.preventDefault();
      $('.checkout-coupon-content').slideToggle(800);
    });

  //Checkout Page Checkbox Accordion
    $("#create_pwd").on("change", function() {
      $(".account-create").slideToggle("100");
    });
    $("#ship_to_different").on("change", function() {
      $(".ship-to-different").slideToggle("100");
    });
    $('.checkout-toggle').on('click', function() {
      $('.open-toggle').slideToggle(800);
    });
    var checked = $( '.sin-payment input:checked' )
    if(checked){
      $(checked).siblings( '.payment-box' ).slideDown(800);
    };
    $( '.sin-payment input' ).on('change', function() {
      $( '.payment-box' ).slideUp(800);
      $(this).siblings( '.payment-box' ).slideToggle(800);
    });

  // Header Sticky
    $Window.on('scroll', function () {
      if ($Window.scrollTop() > 180) {
        $('.sticky-header').addClass('is-sticky');
      } else {
        $('.sticky-header').removeClass('is-sticky');
      }
    });

    var $scrollToUp = $('#scroll-to-top');
  // Click Function Scroll To Top
    $scrollToUp.on('click', function (evt) {
        $('html, body').animate({scrollTop: 0}, 180);
        evt.preventDefault();
    });
  // Add Class To Show Sticky Header & Scroll To Top
    $Window.on('scroll', function () {
      if ($Window.scrollTop() > 180) {
        $scrollToUp.addClass('show');
      } else {
        $scrollToUp.removeClass('show');
      }
    });

  // Ajax Contact Form JS
    var form = $('#contact-form');
    var formMessages = $('.form-message');
    $(form).submit(function(e) {
      e.preventDefault();
      var formData = form.serialize();
      $.ajax({
        type: 'POST',
        url: form.attr('action'),
        data: formData
      }).done(function(response) {
        // Make sure that the formMessages div has the 'success' class.
        $(formMessages).removeClass('alert alert-danger');
        $(formMessages).addClass('alert alert-success fade show');

        // Set the message text.
        formMessages.html("<button type='button' class='btn-close' data-bs-dismiss='alert'>&times;</button>");
        formMessages.append(response);

        // Clear the form.
        $('#contact-form input,#contact-form textarea').val('');
      }).fail(function(data) {
        // Make sure that the formMessages div has the 'error' class.
        $(formMessages).removeClass('alert alert-success');
        $(formMessages).addClass('alert alert-danger fade show');

        // Set the message text.
        if (data.responseText === '') {
          formMessages.html("<button type='button' class='btn-close' data-bs-dismiss='alert'>&times;</button>");
          formMessages.append(data.responseText);
        } else {
          $(formMessages).text('Oops! An error occurred and your message could not be sent.');
        }
      });
    });

  // Resize Event
    $Window.on('resize', function() {
      imageZoom()
    })

})(window.jQuery);
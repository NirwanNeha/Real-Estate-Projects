$(document).ready(function() { 
    $('#toggle').click(function() {
      $(this).toggleClass('active');
      $('#overlay').toggleClass('open');
    }),
    $(".menu ul li a").click(function() {
      $('#toggle').removeClass('active');
      $('#overlay').removeClass('open');
    }),  
    $('.menu ul li a[href^="#"]').on("click", function(t) {
      t.preventDefault();
      var i = this.hash,
          e = $(i);
      $("html, body").stop().animate({
          scrollTop: e.offset().top - 90
      }, 1000, "swing", function() {})
    }),
    $(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
            $('#dynamic').addClass('newClass');
        } else {
            $('#dynamic').removeClass('newClass');
        }
    })


    new Swiper(".amenities-swiper", {
      loop: true,
      spaceBetween: 30,
      // effect: "fade",
      autoplay: {
          delay: 4000,
          disableOnInteraction: false,
      },
      pagination: {
          el: ".swiper-pagination",
          clickable: true
      },
      breakpoints: {  
          '480': {
              slidesPerView: 4,
              spaceBetween: 40,
          },
          '480': {
              slidesPerView: 3,
              spaceBetween: 20,
          },
          '992': {
              slidesPerView: 4,
              spaceBetween: 25,
          },
          '1200': {
              slidesPerView: 5,
              spaceBetween: 30,
          },  
      }
    });
    AOS.init();
    
});
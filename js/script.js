
$(document).ready(function(){
<<<<<<< HEAD
  $(".owl-carousel").owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    autoplay:false,
    autoplayTimeout:3000,
    autoplayHoverPause:false,
    center: true,
    navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>"
    ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
  });
});
=======
    $(".owl-carousel").owlCarousel({
    
      loop:false,
      margin:10,
      nav:true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      center: true,
      navText: [
          "<i class='fa fa-angle-left'></i>",
          "<i class='fa fa-angle-right'></i>"
      ],
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:3
          }
      }
    });
  });
>>>>>>> 30eb9876d2294607704ebdbfd53175ec827826f6

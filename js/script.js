
$(document).ready(function(){
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

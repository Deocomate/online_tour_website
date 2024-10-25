// $(".owl-carousel").owlCarousel({
//   loop: true,
//   margin: 10,
//   nav: true,
//   autoplay: true,
//   autoplayTimeout: 3000,
//   autoplaySpeed: 1000,
//   autoplayHoverPause: true,
//   responsive: {
//     0: {
//       items: 1,
//     },
//     600: {
//       items: 3,
//     },
//     1000: {
//       items: 3,
//     },
//   },
// });

$(document).ready(function(){
  // Carousel 1 với 3 item hiển thị
  $(".owl-carousel-one").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplaySpeed: 1000,
      autoplayHoverPause: true,
      responsive: {
          0: {
              items: 1
          },
          600: {
              items: 2
          },
          1025: {
              items: 3
          }
      }
  });

  // Carousel 2 với 4 item hiển thị
  $(".owl-carousel-two").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplaySpeed: 1000,
      autoplayHoverPause: true,
      responsive: {
          0: {
              items: 1
          },
          600: {
              items: 3
          },
          1025: {
              items: 4
          }
      }
  });
});

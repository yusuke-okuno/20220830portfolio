$(function(){

  $(".slick-area").slick({
    dots: true,
    arrows: false,
    slidesToShow: 3,
    centerMode: true,
    centerPadding: '80px',
    autoplay: true,
    // fade: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          centerPadding: '50px',
          slidesToShow: 1
        }
      }
    ]
  });
  
});

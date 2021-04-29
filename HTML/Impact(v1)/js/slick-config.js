jQuery(document).ready(function($) {
$('.multiple-items').slick({
    arrows: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive:[
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 710,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ]
  });
})

jQuery(document).ready(function($) {
  $('.multiple-items2').slick({
      arrows: false,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 2,
      responsive:[
        {
          breakpoint: 710,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        }
      ]
    });
  })



jQuery(document).ready(function($) {
$('.left').click(function(){
    $('.multiple-items').slick('slickPrev');
  })
})
  jQuery(document).ready(function($) {
  $('.right').click(function(){
    $('.multiple-items').slick('slickNext');
  })
})


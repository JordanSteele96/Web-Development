$(function(){
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows:false,
        responsive: [
          {
            breakpoint: 1250,
            settings: {
              slidesToShow: 3,
            }
          },
          {
            breakpoint: 1000,
            settings: {
              slidesToShow: 3,
            }
          },
          {
            breakpoint: 780,
            settings: {
              slidesToShow:2,
            }
          },
          {
            breakpoint: 640,
            settings: {
              slidesToShow: 1,
            }
          },
          {
            breakpoint: 400,
            settings: {
              slidesToShow: 1,
            }
            
          }]

      });
});

$(function(){
  $('.multiple-items2').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 2,
      arrows:false,
      responsive: [
        {
          breakpoint: 1250,
          settings: {
            slidesToShow: 4,

          }
        },
        {
          breakpoint: 1000,
          settings: {
            slidesToShow: 3,

          }
        },
        {
          breakpoint: 780,
          settings: {
            slidesToShow: 3,
  
          }
        }
      ]
    });
  })


  $(function(){
    $('.multiple-items3').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows:false,
        responsive: [
          {
            breakpoint: 1250,
            settings: {
              slidesToShow: 4,
            }
          },
          {
            breakpoint: 1000,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 780,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 700,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 400,
            settings: {
              slidesToShow: 2,
            }
          }]

      });
});


const filter = (element) => {
  let target = element.dataset.filtertarget;
  resetFilterButtons();
  setFilterButtonActive(target);
  $('.multiple-items').slick('slickUnfilter');
  if (target !== "all") {
    $('.multiple-items').slick('slickFilter', `.${target}`);
  }
};
const resetFilterButtons = () => {
   document.querySelectorAll(".btn").forEach(filterBttn => {

    if(filterBttn == "specialcar" ){
      filterBttn.classList.remove("active");
    }else{
      filterBttn.classList.remove("activeTwo");
    }
    if(filterBttn != "specialcar" ){
      filterBttn.classList.remove("active");
    }else{
      filterBttn.classList.remove("activeTwo");
    }
  })
}
const setFilterButtonActive = (target) => {
  console.log(target);
  if(target == "specialcar"){
    document.querySelector(`[data-filtertarget=${target}]`).classList.add("activeTwo");
  }else{
    document.querySelector(`[data-filtertarget=${target}]`).classList.add("active");
  }
};




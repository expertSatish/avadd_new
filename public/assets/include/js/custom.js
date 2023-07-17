var $ = jQuery.noConflict();

jQuery(document).ready(function($){

/*==========================*/ 
/* sliders */ 
/*==========================*/
if($('.hero_img_slide').length > 0){
jQuery('.hero_img_slide').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay:true,
  autoplaySpeed:1500,
  dots: true,
  arrows: true, 
  infinite: true, 
  centerMode: false, 
   
});
}
 
 if($('.vrtcl-slider').length > 0){
jQuery('.vrtcl-slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay:true,
  autoplaySpeed:1500,
  arrows: true,
  infinite: true, 
  centerMode: false,
  vertical: true,
  verticalSwiping: true,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },  
   ]
});
} 

if($('._partner_slider').length > 0){
jQuery('._partner_slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  arrows: false, 
  autoplay:true,
  autoplaySpeed: 0,
  cssEase: 'linear',
  speed: 3000,
  infinite: true, 
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
    ]
   
});
}

/*==========================*/  
/* Mobile Slider */  
/*==========================*/ 
if($('.mobile-slider').length > 0){
jQuery('.mobile-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false, 
  infinite: true, 
  centerMode: false, 
  responsive: [
    {
      breakpoint: 5000,
      settings: "unslick"
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,  
        adaptiveHeight: false
      }
    }
  ]
});
}
 

/*==========================*/  
/* Scroll on animate */  
/*==========================*/
function onScrollInit( items, trigger ) {
  items.each( function() {
    var osElement = $(this),
        osAnimationClass = osElement.attr('data-os-animation'),
        osAnimationDelay = osElement.attr('data-os-animation-delay');
        osElement.css({
          '-webkit-animation-delay':  osAnimationDelay,
          '-moz-animation-delay':     osAnimationDelay,
          'animation-delay':          osAnimationDelay
        });
        var osTrigger = ( trigger ) ? trigger : osElement;
        osTrigger.waypoint(function() {
          osElement.addClass('animated').addClass(osAnimationClass);
          },{
              triggerOnce: true,
              offset: '95%',
        });
// osElement.removeClass('fadeInUp');
  });
}
onScrollInit( $('.os-animation') );
onScrollInit( $('.staggered-animation'), $('.staggered-animation-container'));


/*==========================*/
/* Header fix */
/*==========================*/
var scroll = $(window).scrollTop();
if (scroll >= 10) {
    $("body").addClass("fixed");
} else {
    $("body").removeClass("fixed");
}


});


$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $("body").addClass("fixed");
    } else {
        $("body").removeClass("fixed");
    }
});


function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("uploaded_img");
    var previewArea = document.getElementById("uploaded_img_area");
    var uploadLabelText = document.getElementById("uploadLabelText");
    preview.src = src;
    preview.style.display = "block";
    previewArea.style.display = "block";
    uploadLabelText.style.display = "none";
  }
}


function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("uploaded_img_one");
    var previewArea = document.getElementById("uploaded_img_area_one");
    var uploadLabelText = document.getElementById("uploadLabelText_one");
    preview.src = src;
    preview.style.display = "block";
    previewArea.style.display = "block";
    uploadLabelText.style.display = "none";
  }
}




const cookie = document.querySelector('.cookie-wrapper');
const cookieButton = document.querySelector('.cookie-btn');
const cookieButtonn = document.querySelector('.cookie-btnn');

window.addEventListener('load', function(){
  cookie.classList.add('show');
});

cookieButton.addEventListener('click', function(){
  cookie.classList.remove('show');
  cookie.classList.add('hide');
});

cookieButtonn.addEventListener('click', function(){
  cookie.classList.remove('show');
  cookie.classList.add('hide');
});

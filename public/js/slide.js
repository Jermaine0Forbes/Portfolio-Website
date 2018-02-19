$(document).ready( function(){

    
// CLASS SLIDE    
function Slide(){
    
    // VARIABLES THAT HOLD INFORMATION FROM THE PORTFOLIO PAGE
  var 
  slides = document.getElementsByClassName('slide').length,
  slider = ".slider",
  width =  ($(window).width()*slides) ,
  right = "button#right",
  left = "button#left",
  slide  = ".slide",
  fraction = (100 / slides)*0.01,
  currentWidth = width,
  newPos = 0,
  slideWidth = width * fraction;





// CHANGES THE ACTIVE CLASS ON THE PAGINATION BUTTONS
  function activeBtn(){
    $('.pagination-button').removeClass('active');
    $('.pagination-button:nth-of-type('+(slideNo)+')').addClass('active');
  }

// CHANGES THE POSITION OF THE PAGINATION CONTAINER  IN ORDER TO CENTER IT
  function adjustPaginationButtons(){
    let optWidth = $('.pagination').width();
    let  parentWidth = $('.pagination').closest('#pagination-container').width();
    let  btnPos = (parentWidth - optWidth) / 2;
    $('.pagination').css({"left": btnPos+"px"});
  }

// INITIATES THE PAGINATION BUTTONS TO BE DISPLAYED ON THE PORTFOLIO PAGE
  function createPaginationButtons(){

    var divs = '';
    var y = 0;
    for(let x = 0; x < slides; x++){
        y = x+1;
      divs += "<div class=\"pagination-button\" data-slide='"+ y+"'> </div>";
    }
    $('.pagination').append(divs);
    adjustPaginationButtons();
    activeBtn();
  };


// MOVES THE SLIDE FORWARD OR BACK    
function moveSlide(){
  newPos = (slideNo -1) * (-slideWidth);
 $(slider).css({'transform' : "translateX("+newPos+"px)"})

}
  
// ACTIVATES THE PAGINATION
function activatePagination(){
    
    
   createPaginationButtons(); 
    
    // WHEN THE PAGINATION BUTTONS ARE CLICKED IT WILL CHANGE THE SLIDE TO THE RIGHT LOCATION
  $('.pagination-button').on('click', function(){
     var num = $(this).attr('data-slide');
       slideNo = num;
       newPos = (slideNo -1) * (-slideWidth);
     $(slider).css({'transform' : "translateX("+newPos+"px)"})
     activeBtn();
   })
    
}

// ACTIVATES THE LEFT AND RIGHT BUTTONS   
function activateSliderBtns(){
    
    // WHEN THE LEFT BUTTON ON THE PORTFOLIO PAGE IS CLICKED IT WILL MOVE TO THE NEXT SLIDE
  $(left).on('click', function(){
    slideNo--;
    if( slideNo != 0){
     moveSlide();

    }else{
      slideNo = slides;
     moveSlide();
    }
    activeBtn();


  })


    // WHEN THE RIGHT BUTTON ON THE PORTFOLIO PAGE IS CLICKED IT WILL MOVE TO THE NEXT SLIDE
      $(right).on('click', function(){
        slideNo++;
        if(slideNo < slides+1){
         moveSlide();
        }else{
          slideNo =1;
         moveSlide();
        }
        activeBtn();

    })//right on
    
}    
    

// RESIZES THE SLIDER
function resizeSlide(){
    
     width = ($(window).width()*slides);
    $(slider).css({"width": width+"px"});
    currentWidth = width * fraction;
    slideWidth = currentWidth;
    newPos = (slideNo-1)*(-slideWidth);
    $(slide).css({"width": currentWidth+"px"});
    $(slider).css({ "transition-duration" :"0s"});
     $(slider).css({'transform' : "translateX("+newPos+"px)"});
    adjustPaginationButtons();

    setTimeout (function(){
      $(slider).css({ "transition-duration" :"0.3s"});}, 500);
    
}

// ACTIVATES ALL THE COMPONENTS OF THE SLIDER
  function startSlide(){
     $(slider).css({"width": width+"px"});
     activatePagination();
     $(slide).css({"width": slideWidth+"px"});
      activateSliderBtns();

    console.log("something is happening");
  }
    
 


  return {
      start:startSlide, 
      adjustBtns:adjustPaginationButtons,
      resize:resizeSlide,
      number:slideNo,
        };
}// Class Slide    
    
    




$slide = new Slide(); 

$slide.start();


  



})// END OF JQUERY

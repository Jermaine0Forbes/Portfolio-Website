$(document).ready( function(){


// VARIABLES THAT HOLD INFORMATION FROM THE PORTFOLIO PAGE
  var slides = document.getElementsByClassName('slide').length,
      slider = ".slider",
      about = document.getElementsByClassName('about-block'),
      aboutInterval,
      aboutCounter = 0,
      width =  ($(window).width()*slides) ,
      right = "button#right",
      left = "button#left",
      slide  = ".slide",
      fraction = (100 / slides)*0.01,
      currentWidth = width,
      windowWidth ,
      newPos = 0,
      menuBtn = $("button.menu-btn"),
      menuVisible = "menu-visible",
      menuHidden = "menu-hidden",
      isOpen = true,
      proTitle = $('.project-title h4 a'),
      id ,
      isMobile = false,
      modal = $("#modal-menu"),
      projects = $('.projects'),
      slideWidth = width * fraction;
      $(slider).css({"width": width+"px"});



/* CONTROLLING THE TABS ON THE PORTFOLIO PAGE    */
      proTitle.on('click', function(){
         id = $(this).attr('id');

         proTitle.removeClass('active');

         projects.hide();
         $('.projects.'+id).slideDown();
          $(this).addClass('active');

      })

/* ACTIVATES THE ANIMATION ON THE ABOUT AND SKILL PAGE */
     function activateAbout(){
           $(".about-block").animateCss("fadeIn");
        //   $("#about-title").animateCss("fadeIn");
        //   $("#bio").animateCss("fadeIn");
        //   $("#experience").animateCss("fadeIn");
          $('#about').addClass("visible");
      }

     function activateSkill(){
         $("#frontend").animateCss("bounceIn");
         $("#backend").animateCss("bounceIn");
         $('#skill').addClass("visible");
     }
     activateSkill();
     activateAbout();


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
  (function createPaginationButtons(){

    var divs = '';
    var y = 0;
    for(let x = 0; x < slides; x++){
        y = x+1;
      divs += "<div class=\"pagination-button\" data-slide='"+ y+"'> </div>";
    }
    $('.pagination').append(divs);
    adjustPaginationButtons();
    activeBtn();
  })();

  $(slide).css({"width": slideWidth+"px"});


function aboveMobile (){
    if(isOpen){
        $(this).removeClass('close-menu').addClass('open-menu');
        $(this).find('i').removeClass('fa-times').addClass('fa-bars').css({"color":"white"});
        $('header').removeClass(menuVisible).addClass(menuHidden);
        isOpen = false;
    }else{
        $(this).removeClass('open-menu').addClass('close-menu')
        $(this).find('i').removeClass('fa-bars').addClass('fa-times').css({"color":"#3E4F89"});
        $('header').removeClass(menuHidden).addClass(menuVisible);
        isOpen = true;
    }

}

function belowMobile (){
    if(!modal.hasClass('off')){
        $(this).removeClass('close-menu').addClass('open-menu');
        $(this).find('i').removeClass('fa-times').addClass('fa-bars').css({"color":"white"});
        modal.addClass('off').fadeOut(500);
        isOpen = false;
    }else{
        $(this).removeClass('open-menu').addClass('close-menu')
        $(this).find('i').removeClass('fa-bars').addClass('fa-times').css({"color":"#3E4F89"});
        modal.removeClass("off").fadeIn(500);
        isOpen = true;
    }

}


/* CONTROLLING THE TOP MENU   */
    menuBtn.on('click', aboveMobile );


  // CHECKS THE WINDOW SIZE IN ORDER TO SEE IF THE WIDTH IS UNDER 576PX
  function checkMobile() {
      windowWidth = $(window).width();

      if( windowWidth < 577 && isMobile == false){
          menuBtn.trigger('click');
          menuBtn.off('click');
          menuBtn.on('click', belowMobile )
          isMobile = true;
      }else if(windowWidth > 577 && isMobile == true){
          menuBtn.off('click');
          menuBtn.on('click', aboveMobile )
          isMobile = false;
      }
    //   console.log(currentWidth)
  }

  checkMobile();


  $(window).resize(function(){
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

      checkMobile()


});

// WHEN THE PAGINATION BUTTONS ARE CLICKED IT WILL CHANGE THE SLIDE TO THE RIGHT LOCATION
  $('.pagination-button').on('click', function(){
     var num = $(this).attr('data-slide');
       slideNo = num;
       newPos = (slideNo -1) * (-slideWidth);
     $(slider).css({'transform' : "translateX("+newPos+"px)"})
     activeBtn();
   })


// WHEN THE LEFT BUTTON ON THE PORTFOLIO PAGE IS CLICKED IT WILL MOVE TO THE NEXT SLIDE
  $(left).on('click', function(){
    slideNo--;
    if( slideNo != 0){
        newPos = (slideNo -1) * (-slideWidth);
     $(slider).css({'transform' : "translateX("+newPos+"px)"})

    }else{
      slideNo = slides;
      newPos = (slideNo -1) * (-slideWidth);
     $(slider).css({'transform' : "translateX("+newPos+"px)"})
    }
    activeBtn();


  })


// WHEN THE RIGHT BUTTON ON THE PORTFOLIO PAGE IS CLICKED IT WILL MOVE TO THE NEXT SLIDE
  $(right).on('click', function(){
    slideNo++;
    if(slideNo < slides+1){
       newPos = (slideNo-1) * (- slideWidth);
     $(slider).css({'transform' : "translateX("+newPos+"px)"})
    }else{
      slideNo =1;
      newPos = (slideNo-1) * (- slideWidth);
     $(slider).css({'transform' : "translateX("+newPos+"px)"})
    }
    activeBtn();

})//right on




})// END OF JQUERY

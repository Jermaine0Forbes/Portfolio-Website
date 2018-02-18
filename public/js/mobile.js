$(document).ready(function () {
    
   var 
      windowWidth ,
      menuBtn = $("button.menu-btn"),
      menuVisible = "menu-visible",
      menuHidden = "menu-hidden",
      isOpen = true,
      isMobile = false,
      modal = $("#modal-menu");
    
     function activateBtn(){
      let result = menuBtn.hasClass("open-menu");
      if(result){
        menuBtn.removeClass('open-menu').addClass('close-menu');
        menuBtn.find('i').removeClass('fa-bars').addClass('fa-times').css({"color":"#3E4F89"});
      }else{
        menuBtn.removeClass('close-menu').addClass('open-menu');
        menuBtn.find('i').removeClass('fa-times').addClass('fa-bars').css({"color":"white"});
      }
  }
    
    function aboveMobile () {
    if (isOpen) {
        activateBtn();
        $('.top-nav').removeClass(menuVisible).addClass(menuHidden);
        isOpen = false;
    } else{
        activateBtn();
        $('.top-nav').removeClass(menuHidden).addClass(menuVisible);
        isOpen = true;
    }

}
    function removeModal(){
        let result = modal.addClass('on');
        if(result){
            modal.addClass('off').removeClass('on');
        }
        
    }
    
 

function belowMobile () {
    if (modal.hasClass('off')) {
        activateBtn();
        modal.addClass('on').fadeIn(500).removeClass("off");
        isOpen = true;
        
        
    } else{
        activateBtn();
        modal.addClass('off').removeClass('on').hide();
        isOpen = false;
    }

}


/* CONTROLLING THE TOP MENU   */
    menuBtn.on('click', aboveMobile );


  // CHECKS THE WINDOW SIZE IN ORDER TO SEE IF THE WIDTH IS UNDER 576PX
  function checkMobile() {
      windowWidth = $(window).width();

      if ( windowWidth < 577 && isMobile == false) {
          isOpen && menuBtn.trigger('click');
          menuBtn.off('click');
          menuBtn.on('click', belowMobile )
          isMobile = true;
      } else if(windowWidth > 577 && isMobile == true){
          menuBtn.off('click');
          menuBtn.on('click', aboveMobile );
          removeModal();
		  isOpen && menuBtn.trigger('click');
          isMobile = false;
      }
  }

 checkMobile();

$slide.start();
    
$(window).on("resize",function(){
    checkMobile();
})
    
})//ready
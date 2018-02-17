$(document).ready(function(){
    
    /* ACTIVATES THE ANIMATION ON THE ABOUT AND SKILL PAGE */
     function activateAbout(){
           $(".about-block").animateCss("fadeIn");
          $('#about').addClass("visible");
      }

     function activateSkill(){
         $("#frontend").animateCss("fadeIn");
         $("#backend").animateCss("fadeIn");
         $('#skill').addClass("visible");
     }
    activateSkill();
    activateAbout();
    
});  //ready
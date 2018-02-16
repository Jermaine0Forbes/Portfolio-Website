$(document).ready(function(){
    
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
    
});  //ready
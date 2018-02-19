$(document).ready(function(){
    var slides = document.getElementsByClassName('slide').length,
        slider = ".slider",
        width =  ($(window).width()*slides) ;
        console.log(slideNo);


        $(".direction").on('click',function(){
            // console.log(slideNo);
            activateAnime(slideNo);
        })// direction on click

        $(".pagination-button").on('click',function(){
            // console.log(slideNo);
            activateAnime(slideNo);
        })// direction on click

// STARTS THE IMAGE SLIDERS THAT ARE ON EACH PAGE
        function startSlides(selector){
            $(selector+' .flex-medium').flexslider({
                selector: ".imgList > li",
                animation: 'fade',
                slideshowSpeed: 9000,
                animationSpeed:500,
                animationLoop:true,
                controlNav: false,
            });
            $(selector+' .flex-small').flexslider({
                selector: ".imgList > li",
                animation: 'fade',
                slideshowSpeed: 5000,
                animationSpeed:500,
                animationLoop:true,
                controlNav: false,
            });
        }//startSlides

        function hoveringSmall(selector){
            setTimeout(function(){
                $(selector).find(".small").removeClass("animated bounceInUp");
                $(selector).find(".small").addClass("smallHover");

            }, 2000)

        }//hoveringSmall

        function activateAnime(num){
            var selector = ".slide:nth-of-type("+num+")";
            var answer = $(selector).hasClass('visible');

            if(answer == false){
                setTimeout(function(){
                    $(selector).find("h2.slide-title").animateCss("fadeInRight");
                    $(selector).find(".slide-date").animateCss("fadeInDown");
                    $(selector).find(".slide-summary").animateCss("fadeInDown");
                    $(selector).find(".slide-facts").animateCss("fadeInDown");
                    $(selector).find(".btn-container").animateCss("zoomInDown");
                    $(selector).find(".medium").animateCss("rollIn");
                    $(selector).find(".big").animateCss("fadeInRight");
                    $(selector).find(".small").animateCss("bounceInUp");
                    $(selector).addClass('visible');
                    hoveringSmall(selector);
                    startSlides(selector);
                },300);

            }

        }//activateAnime



        activateAnime(slideNo);


});

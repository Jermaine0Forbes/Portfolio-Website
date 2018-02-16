
<script  type="text/javascript" >
    var slideNo = 1;
    $.fn.extend({
    animateCss: function (animationName) {
    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    this.addClass('animated ' + animationName).one(animationEnd, function() {
        $(this).removeClass('animated ' + animationName);
        });
    }
});// animateCss
</script>


@if(Route::is('home'))
    <script src={{asset("/js/jquery.flexslider-min.js")}} ></script>
    <script src={{asset("/js/slide.js")}} ></script>
    <script src={{asset("/js/anime.js")}} ></script>
@else
    <script src={{asset("/js/other-pages.js")}} ></script>
@endif
<script src={{asset("/js/mobile.js")}} ></script>

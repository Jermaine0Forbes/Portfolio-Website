
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

<script src="/js/slide.js" ></script>


@if(Route::is('home'))
    <script src="/js/jquery.flexslider-min.js" ></script>
    <script src="/js/anime.js" ></script>
@endif

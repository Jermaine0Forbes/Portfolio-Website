<button class="menu-btn close-menu">
    <i class="fa fa-times" aria-hidden="true"></i>
</button>

@if(Route::is('home'))

    <button class="menu-btn close-menu">
        <i class="fa fa-times" aria-hidden="true"></i>
    </button>

    <button class="direction action-ajax" data-action="pressed" data-description="pressed the left button" id="left">
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
    </button>
    <button class="direction action-ajax" data-action="pressed" data-description="pressed the right button"id="right">
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
    </button>

@endif

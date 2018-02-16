<div id="modal-menu" class="row justify-content-center no-mar off">
    <div class="menu col-9">
        <img  class="img-fluid logo" src="/img/regular-logo.svg" alt="logo">
        <div class="list">
            <a class="nav-link @if(Route::is('home')) active @endif" href="/">Portfolio</a>
            <a class="nav-link @if(Route::is('skills')) active @endif" href="{{route('skills')}}">Skills</a>
            <a class="nav-link @if(Route::is('about')) active @endif" href="{{route('about')}}">About</a>
            <a class="nav-link @if(Route::is('contact')) active @endif" href="{{route('contact')}}">Contact</a>
        </div>
    </div>
</div>
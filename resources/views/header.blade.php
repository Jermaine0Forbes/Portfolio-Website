@include('components.modal')

<div class="top-nav row justify-content-center mar-half marV no-pad">
      <div class="col-sm-8 hidden-xs-down">
          <nav class="navbar">
              <ul class=" navbar-nav around">
                  <li class="nav-item">
                    <a class="nav-link @if(Route::is('home')) active @endif" href="/">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link @if(Route::is('skills')) active @endif" href="/skills">Skills</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link @if(Route::is('about')) active @endif" href="/about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link @if(Route::is('contact')) active @endif" href="/contact">Contact</a>
                  </li>
                  @auth ('admin')
                      <li class="nav-item">
                        <a class="nav-link" href="/admin">Admin</a>

                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="admin/@if(Request::path() == "/")portfolio @else{{Request::path()}} @endif">Edit</a>
                    </li>
                  @endauth
              </ul>
          </nav>
      </div>
  </div>

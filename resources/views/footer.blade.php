
@if(Route::is('home'))
	<div class="row justify-content-center">
	   <div id="pagination-container" class="col-12 col-sm-6">
	        <div class="pagination">

	        </div>
	   </div>
	</div>
@endif

<div class="row justify-content-center">

<div class="@if(Route::is('home')) col-sm-4  col-12 @else col-sm-6 col-12 @endif">
  <p class="h5 text-center">&copy; <?php echo date('o'); ?> by Jermaine Forbes</p>
</div>

<div class="@if(Route::is('home')) col-sm-4  col-12 @else col-sm-6 col-12 @endif">
  <div class="social-section center">
      <ul class="link-inline around">
          <li><a class="action-ajax" data-action="click" data-description="linkedin icon" href="http://bit.ly/2diKuOb"><i class="fa fa-linkedin " aria-hidden="true"></i></a></li>
          <li><a class="action-ajax" data-action="click" data-description="twitter icon" href="https://twitter.com/JFDzine"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a class="action-ajax" data-action="click" data-description="mail icon" href="mailto:jermaine0forbes@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
          <li><a class="action-ajax" data-action="click" data-description="github icon" href="https://github.com/Jermaine0Forbes?tab=repositories"><i class="fa fa-github-alt" aria-hidden="true"></i></a></li>
      </ul>
  </div>
</div>
</div>

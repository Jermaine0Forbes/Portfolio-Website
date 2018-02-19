@extends('layouts.layout')

@section('main')
	<div  class="container page-content">
        <div class="row justify-content-center">
            <h2 class="about-block pad" >Contact Me</h2>

			<div class="break"></div>

			<div id="contact" class="col-md-8">
                
                
                
                <p class="mx-auto fluid-9 text-center summary">
                    Hey, if you like my work and you want to work together the best way to contact me
                    is by phone. If you want to do it through email send me a simple message and I will try to get
                    back to you in less than 48 hours. You can also visit my linkedin page so that we can connect through
                    there. Other than that, I appreciate you taking a look at my website
                </p>
                

				<form class="form mx-auto fluid-8" method="post" action="{{route('contact.submit')}}" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="input-group">
                        <input class="form-control" type="text" name="subject" placeholder="Enter your Subject..." required >
					   </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                        <input class="form-control" type="text" name="email" placeholder="Enter your Email..." required >
					   </div>
                    </div>
					
                    <div class="form-group">
                    <div class="input-group">
                       
                        <textarea class="form-control " rows="8" name="message" placeholder="Message" required>Enter your Message...
                        </textarea>
                    </div>
                    </div>
                    
                    <div class="contact-group">
                    <a class="link-left" href="tel:786-863-0270">
                        <span class="fa fa-phone"></span> 
                        786-863-0270
                    </a>
                    <a class="link-mid" href="http://bit.ly/2diKuOb">
                        <span class="fa fa-linkedin"></span> 
                        linkedin
                    </a>
                    <a class="link-right" href="mailto:jermaine0forbes@gmail.com">
                        <span class="fa fa-envelope"></span> 
                        email
                    </a>
                </div>
					
					<div class="form-group">
						<input class="form-control btn"  type="submit" value="submit">
					</div>
				</form>
                



			</div>

	    </div>
	</div>
@endsection

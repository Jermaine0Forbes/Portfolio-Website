@extends('layouts.layout')

@section('main')
    <div id="about" class="container page-content">
            <div class="row justify-content-center">
                <h2 id="about-title" class="about-block pad">{{$title}}</h2>


                <div id="bio" class="row justify-content-center about-block">
                    <div class="col-10 col-sm-8 ">
                        <div class="border-pic">
                            <img class="img-fluid" src="{{$image}}" alt="logo or picture of me">
                        </div>
                    </div>
					{!!$summary!!}
                       
                </div>
                

                <div class="fluid row justify-content-center about-block ">
					{!!$highlight!!}
                </div>


                <div id="experience" class="row justify-content-center about-block ">
					{!!$experience!!}
                </div>
				
			</div>

	</div> <!-- about -->    
@endsection

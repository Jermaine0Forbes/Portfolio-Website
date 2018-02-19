@extends('layouts.layout')

@section('main')
    <div  class="container page-content">
            <div class="row justify-content-center">
                <h2 id="about-title" class="pad emerge e-1" data-emergence="hidden">{{$title}}</h2>


                <div id="bio" class="row justify-content-center emerge e-2" data-emergence="hidden">
                    <div class="col-10 col-sm-8 ">
                        <div class="border-pic">
                            <img class="img-fluid pad" src="{{$image}}" alt="logo or picture of me">
                        </div>
                    </div>
					{!!$summary!!}
                       
                </div>
                

                <div class="fluid row justify-content-center emerge e-3 " data-emergence="hidden">
					{!!$highlight!!}
                </div>


                <div  class="row justify-content-center ">
					{!!$experience!!}
                </div>
				
			</div>

	</div> <!-- about -->    
@endsection

@extends('layouts.layout')

@section('main')
    <div  class="container page-content">
            <div class="row justify-content-center">
              <div class="col-sm-9">
                <h2 id="about-title" class="py-3 emerge e-1" data-emergence="hidden">{{$header}}</h2>
                <h5 class="mt-4 emerge e-2" data-emergence="hidden"><i class="fa fa-calendar-o" aria-hidden="true"></i>  Last updated: {{$updated->format("m/d/Y")}}</h5>

                <div id="bio" class="row justify-content-center emerge e-3" data-emergence="hidden">
                    {{-- <div class="col-10 col-sm-8 ">
                        <div class="border-pic">
                            <img class="img-fluid pad" src="{{$image}}" alt="logo or picture of me">
                        </div>
                    </div> --}}
                     {!!$summary!!}

                </div>


                <div class="fluid row justify-content-center emerge e-4 " data-emergence="hidden">
                   {!!$highlight!!}
                </div>


                <div  class="row justify-content-center ">
                   {!!$experience!!}
                </div>

              </div>

			</div>

	</div> <!-- about -->
@endsection

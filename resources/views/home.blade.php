@extends('layouts.layout')

@section('main')


    <div class="slider">
        @foreach( $projects as $pro)
          <div class="slide" >
          <div class="container wide page-content">
              <div class="row hite-9">
                  <div class="col-sm-10 col-md-7 center-md">
                      <div  class="row no-mar  justify-content-center ">

                           <div class="col-lg-10 pad padH ">
                               <h2 class=" text-center slide-title">{{$pro->name}} </h2>
                               <div class="row justify-content-center hidden-md-up">
                                   <div class="col-8 mobile-pic ">
                                       <div class="medium">
                                           @if(empty($pro->mediumImage()))
                                                <img class="img-fluid" src="{{asset('img/default-small.svg')}}" alt="mobile image">
                                           @else
                                                <img class="img-fluid" src="img/{{$pro->mediumImage()[0]->image}}" alt="mobile image">
                                           @endif
                                           
                                       </div>
                                   </div>
                               </div>

                               <div class="row slide-mobile-padding slide-date">
                                 <div class="col-sm-6 text-sm-center mobile-text-center">
                                    <span class="center "><i class="fa fa-calendar" aria-hidden="true"></i> Created:
                                      <?php $created = new Datetime($pro->createdAt) ;
                                      $created = $created->format('m/d/Y'); ?>
                                      {{$created}}
                                    </span>
                                 </div>
                                 <div class="col-sm-6 text-sm-center mobile-text-center">
                                    <span class="center "><i class="fa fa-calendar-o" aria-hidden="true"></i> Last Updated:
                                      <?php $updated = new Datetime($pro->updatedAt) ;
                                      $updated = $updated->format('m/d/Y'); ?>
                                      {{$updated}}
                                    </span>
                                 </div>
                               </div>
                               <div class="row justify-content-center slide-mobile-padding slide-summary">
                                  <div class="col-sm-10 hidden-sm-down">
                                      <p>
                                         {{$pro->summary}}
                                      </p>
                                  </div>
                               </div>
                               <div class="row mar marV hidden-md-down slide-facts">
                                     <div class="col-md-4">
                                         <div class="">
                                              <p class="h4">Frameworks</p>
                                              <ul>
                                                @foreach( $pro->getFrame() as $data)
                                                  <li>{{$data->framework}}</li>
                                                @endforeach
                                              </ul>
                                         </div>
                                     </div>

                                     <div class="col-md-4">
                                         <div class="">
                                              <p class="h4">Made With</p>
                                              <ul>
                                               @foreach( $pro->getLang() as $data)
                                                  <li>{{$data->language}}</li>
                                                @endforeach
                                              </ul>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="">
                                              <p class="h4">Libraries</p>
                                              <ul>
                                                @foreach( $pro->getLibrary() as $data)
                                                  <li>{{$data->library}}</li>
                                                @endforeach
                                              </ul>
                                         </div>
                                     </div>
                              </div>

                              @if (empty($pro->code))
                                  <div class="row justify-content-center no-gutters visit">
                                    <div class="col-sm-6  btn-container">
                                      <a href="{{$pro->link}}" target="_blank" class="btn btn-primary fluid "> visit site</a>
                                    </div>
                                  </div>

                              @else

                                  <div class="row justify-content-center no-gutters visit">
                                      <div class="col-sm-6  btn-container">
                                        <a href="{{$pro->link}}" target="_blank" class="btn btn-primary fluid left"> visit site</a>
                                      </div>
                                    <div class="col-sm-6  btn-container">
                                      <a href="{{$pro->code}}" target="_blank" class="btn btn-primary fluid right "> visit code</a>
                                    </div>
                                  </div>

                             @endif
                           </div>
                      </div>
                  </div>
                  <div class="col-sm-5 overflow-hide hidden-sm-down">
                      <div class="big">

                      </div>

                 <div class="medium">
                          <a href="{{$pro->link}}">
                              
                              @if(empty($pro->mediumImage()))
                                <img class="img-fluid" src="{{asset('img/default-medium.svg')}}" alt="blank image">

                              @else
                                @if( sizeof($pro->mediumImage()) > 1)
                                  <div class="flex-medium">
                                      <ul class="imgList">
                                          @foreach( $pro->mediumImage() as $data)
                                              <li>
                                                <img class="img-fluid" src="img/{{$data->image}}" alt="medium image">
                                              </li>
                                          @endforeach
                                      </ul>
                                  </div>

                                  @else
                                      <img class="img-fluid" src="img/{{$pro->mediumImage()[0]->image}}" alt="medium image">

                                  @endif
                              @endif
                              
                          </a>
                      </div>

                      <div class="small">
                          <a href="{{$pro->link}}">
                              
                              @if(empty($pro->smallImage()))
                                <img class="img-fluid" src="{{asset('img/default-small.svg')}}" alt="blank image">

                              @else
                                @if( sizeof($pro->smallImage()) > 1 )
                                  <div class="flex-small">
                                      <ul class="imgList">
                                          @foreach( $pro->smallImage() as $data)
                                              <li>
                                                <img class="img-fluid" src="img/{{$data->image}}" alt="small image">
                                              </li>
                                          @endforeach
                                      </ul>
                                      </div>
                                  @else
                                      <img class="img-fluid" src="img/{{$pro->smallImage()[0]->image}}" alt="small image">
                                  
                                  @endif
                              @endif
                              
                          </a>
                      </div>
                  </div>
              </div>

          </div>
          </div>

        @endforeach

    </div><!-- slider -->


@stop

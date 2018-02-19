@extends('layouts.layout')

@section('main')
    <div id="" class="container page-content">
      <div class="row justify-content-center">
        <div class="col-sm-8 pad padH">
            <h2 class="text-center emerge" data-emergence="hidden">{{$title}}</h2>
            <div id="frontend" class="row web-skills">
                <div class="fluid emerge" data-emergence="hidden">
                    <p>
                        {{$summary}}
                    </p>
                    <div class="row">
                        <div class="fluid">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Skillset</th>
                                  <th class="hidden-xs-down">Rank</th>
                                  <th class="hidden-sm-down">Learning</th>
                                  <th class="hidden-md-down">Position</th>
                                  <th>Years</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach( $set as $skill)
                                  <tr>
                                  <th scope="row">{{$skill->name}}</th>
                                  <td class="hidden-xs-down">{{$skill->rank}}</td>
                                  <td class="hidden-sm-down">
                                    @if($skill->current == 0)
                                        No
                                    @else
                                         Yes
                                    @endif
                                  </td>
                                  <td class="hidden-md-down">{{$skill->position}}</td>
                                  <td>
                                      @if ($skill->year)
                                          {{$skill->year->diffForHumans()}}
                                      @else
                                          {{$skill->year}}
                                      @endif


                                  </td>
                                </tr>
                                @endforeach

                              </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      </div>
    </div>
@stop

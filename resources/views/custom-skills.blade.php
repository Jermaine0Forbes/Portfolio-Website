@extends('layouts.layout')

@section('main')
    <div id="skill" class="container page-content">
      <div class="row justify-content-center">
        <div class="col-sm-8 pad padH">
            <h2 class="text-center">{{$title}}</h2>
            <div id="frontend" class="row web-skills">
                <div class="fluid">
                    <p>
                        {{$summary}}
                    </p>
                    <div class="row">
                        <div class="fluid">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Skillset</th>
                                  <th>Rank</th>
                                  <th>Currenty Learning</th>
                                  <th>Position</th>
                                  <th>Years</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach( $set as $skill)
                                  <tr>
                                  <th scope="row">{{$skill->name}}</th>
                                  <td>{{$skill->rank}}</td>
                                  <td>
                                    @if($skill->current == 0)
                                        No
                                    @else
                                         Yes
                                    @endif
                                  </td>
                                  <td>{{$skill->position}}</td>
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

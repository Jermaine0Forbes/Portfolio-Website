@extends('layouts.backend')

@section('content')
@include('vendor.laravel-editor.editor-css')
<div class="container">
    <div class="row">
        <form class="mt-3 w-100"  method="post" action="{{route('admin.skills.submit')}}">
            {{ csrf_field() }}
            <input type="hidden" name="row" value="">
            <div class="row w-100 justify-content-center">
                <div class="col-md-9 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input class="form-control" type="text" name="title" value="{{$title}}">
                            </div>

                        </div>

                        <div class="card-body">
                            <div class="form-group">
                              <label for="summary">Summary</label>
                              @include('vendor.laravel-editor.textarea',["name"=>'summary',"content" => $summary])
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="highlight">Skillset</label>
                                <table class="table">
                                    <thead>
                                        <th>Skillset</th>
                                        <th>Currently Learning</th>
                                        <th>Rank</th>
                                        <th>Position</th>
                                        <th>Years</th>
                                    </thead>
                                    <tbody>
                                        @if (!empty($set))
                                            @foreach ($set as $skill)
                                                <tr data-number="{{$skill->id}}">
                                                    <td><input class="form-control" type="text" name="name-{{$skill->id}}" value="{{$skill->name}}">  </td>
                                                    <td>
                                                        <select class="form-control" name="current-{{$skill->id}}">
                                                            <option value="0"
                                                             @if ($skill->current == "0")
                                                                selected
                                                            @endif>False</option>
                                                            <option value="1"
                                                            @if ($skill->current == "1")
                                                               selected
                                                           @endif>True</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="rank-{{$skill->id}}">
                                                            <option value="4"
                                                            @if ($skill->rank == "4")
                                                                selected
                                                            @endif>Familiar</option>
                                                            <option value="3"
                                                            @if ($skill->rank == "3")
                                                                selected
                                                            @endif>Competent</option>
                                                            <option value="2"
                                                            @if ($skill->rank == "2")
                                                                selected
                                                            @endif>Proficient</option>
                                                            <option value="1"
                                                            @if ($skill->rank == "1")
                                                                selected
                                                            @endif>Master</option>
                                                        </select>
                                                     </td>
                                                    <td>
                                                        <select class="form-control" name="position-{{$skill->id}}">

                                                            <option value="1"
                                                            @if ($skill->position == "1")
                                                                selected
                                                            @endif>Front</option>
                                                            <option value="2"
                                                            @if ($skill->position == "2")
                                                                selected
                                                            @endif>Back</option>
                                                            <option value="3"
                                                            @if ($skill->position == "3")
                                                                selected
                                                            @endif>Other</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input data-toggle="datepicker" class="form-control" type="text" name="year-{{$skill->id}}" value="{{$skill->year}}">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr data-number="1">
                                                <td><input class="form-control" type="text" name="name-1" value="">  </td>
                                                <td>
                                                    <select class="form-control" name="current-1">
                                                        <option value="0" >False</option>
                                                        <option value="1">True</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" name="rank-1">
                                                        <option value="4">Familiar</option>
                                                        <option value="3">Competent</option>
                                                        <option value="2" >Proficient</option>
                                                        <option value="1">Master</option>
                                                    </select>
                                                 </td>
                                                <td>
                                                    <select class="form-control" name="position-1">
                                                        <option value="1">Front</option>
                                                        <option value="2">Back</option>
                                                        <option value="3">Other</option>
                                                    </select>
                                                </td>
                                                <td><input data-toggle="datepicker" class="form-control" type="text" name="year-1" value="">  </td>
                                            </tr>
                                        @endif

                                    </tbody>
                                </table>
                                <div id="add-row" class="col bg-light d-flex justify-content-end">
                                    <span>Add a new skillset</span>
                                    <button type="button" class="fa fa-plus"></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-2 ml-auto">
                    <div class="card mb-3">
                        <div class="card-header">
                            Options
                        </div>
                        <div class="card-body">
                            <div class="col">
                                <input class="btn btn-primary w-100" type="submit" name="" value="Save">
                            </div>
                            <div class="col">
                                <input class="btn btn-success w-100" type="button" name="" value="Preview">
                            </div>
                            <div class="col">
                                <input class="btn btn-danger w-100" type="button" name="" value="Delete">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>

@include('vendor.laravel-editor.editor-js')

@endsection

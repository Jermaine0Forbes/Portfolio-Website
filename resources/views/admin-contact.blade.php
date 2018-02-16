@extends('layouts.backend')

@section('content')
@include('vendor.laravel-editor.editor-css')
<div class="container">
    <div class="row">
        <form class="mt-3 w-100"  method="post" action="{{route('admin.contact.submit')}}">
            {{ csrf_field() }}
            <div class="row w-100 justify-content-center">
                <div class="col-md-8 ">
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
                              @include('vendor.laravel-editor.textarea',["name"=>'body',"content" => $body])
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ml-auto">
                    <div class="card mb-3">
                        <div class="card-header">
                            Options
                        </div>
                        <div class="card-body">
                            <div class="col">
                                <input class="btn btn-primary w-100" type="submit" name="" value="Save">
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

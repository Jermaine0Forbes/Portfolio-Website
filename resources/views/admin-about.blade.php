@extends('layouts.backend')

@section('content')
@include('vendor.laravel-editor.editor-css')
<div class="container">
    <div class="row">
        <form class="mt-3 w-100"  method="post" action="{{route('admin.about.submit')}}">
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
                              <label for="about">Image</label>
                              <input class="form-control" type="text" name="image" value="{{$image or "img.jpg"}}">
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
                                <label for="highlight">Highlights</label>
                            @include('vendor.laravel-editor.textarea',["name"=>'highlight',"content" => $highlight])
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="experience">Experience</label>
                            @include('vendor.laravel-editor.textarea',["name"=>'experience',"content" => $experience])
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
<!-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/config.js"></script>
    <script>
        var selector = 'textarea#editor';

        $(selector).ckeditor();

        CKEDITOR.editorConfig(CKEDITOR.config);
        console.log(CKEDITOR.config);
        // $('.textarea').ckeditor(); // if class is prefered.
    </script> -->
@endsection

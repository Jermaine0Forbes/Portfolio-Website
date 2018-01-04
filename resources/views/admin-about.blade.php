@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row">
        <form class="mt-3 w-100"  method="post" action="{{route('admin.about.submit')}}">
            {{ csrf_field() }}
            <div class="row w-100">
                <div class="col-md-8 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input class="form-control" type="text" name="title" value="{{$title}}">
                            </div>

                        </div>

                        <div class="card-body">
                            <textarea id="editor" name="body" rows="8" cols="80">
                                {{$content}}
                            </textarea>
                        </div>
                        <div class="card-body row">
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
                <div class="col-md-3 ml-auto">
                    <div class="card">
                        <div class="card-header">
                            Publish
                        </div>
                        <div class="card-body">
                            {{-- <input class="btn btn-primary w-100" type="submit" name="" value="Save"> --}}
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">
                            Categories
                        </div>
                        <div class="card-body">
                            <input class="form-control" type="text" name="categories" >
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">
                            Tags
                        </div>
                        <div class="card-body">
                            <input class="form-control" type="text" name="tags" >
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">
                            Featured Image
                        </div>
                        <div class="card-body">
                            <input type="file" name="featured-image" >
                        </div>
                    </div>

                </div>
            </div>
        </form>

    </div>
</div>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea#editor').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
@endsection

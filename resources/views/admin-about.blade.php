@extends('layouts.backend')

@section('content')
@include('vendor.laravel-editor.editor-css')
<div class="container">
    <div class="row">
        <form class="mt-3 w-100"  method="post" action="{{route('admin.about.submit')}}">
            {{ csrf_field() }}
            <div class="row w-100 justify-content-center">
                <div class="col-md-10 ">
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
                                <div id="editor-summary" class="text-editor">
                                  {{$summary}}
                                </div>
                                <textarea id="hidden-summary" class="d-none"  name="summary" rows="8" cols="80">{{$summary}}</textarea>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="highlights">Highlights</label>
                                <div id="editor-highlight" class="text-editor">
                                  {{$highlight}}
                                </div>
                                <textarea id="hidden-highlight" class="d-none" name="highlight" rows="8" cols="80">{{$highlight}}</textarea>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="experience">Experience</label>
                                <div id="editor-experience" class="text-editor">
                                  {{$experience}}
                                </div>
                                <textarea id="hidden-experience" class="d-none" name="experience" rows="8" cols="80">{{$experience}}</textarea>
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
<script type="text/javascript">

const editors = [].slice.call(document.getElementsByClassName("text-editor"));

editors.forEach(function(e){
  e.style.minHeight = "400px";
})

 // document.getElementById("editor").style.minHeight="400px";
 var inSum = document.getElementById("hidden-summary"),
    inHigh = document.getElementById("hidden-highlight"),
    inExp = document.getElementById("hidden-experience");
var editorSum = ace.edit("editor-summary"),
    editorHigh = ace.edit("editor-highlight"),
    editorExp = ace.edit("editor-experience");

var options = {
  firstLineNumber:1,
  minLines:50,
  fontSize:16,
  mode:"ace/mode/html",
  theme:"ace/theme/dracula"
};


editorSum.setOptions(options);
editorHigh.setOptions(options);
editorExp.setOptions(options);

editorSum.getSession().on("change", function () {
       inSum.value = editorSum.getSession().getValue();
   });
editorHigh.getSession().on("change", function () {
       inHigh.value = editorHigh.getSession().getValue();
   });
editorExp.getSession().on("change", function () {
       inExp.value = editorExp.getSession().getValue();
   });
</script>
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

@extends('layouts.backend')

@section('content')
@include('vendor.laravel-editor.editor-css')
    <div class="container">
        <div class="row">
            <form class="mt-3 w-100 row portfolio-form"  method="post" >
                {{ csrf_field() }}
                    <div class="col-md-7 ">
                        <div class="form-group ">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" name="name" value="">
                        </div><!-- Name -->
                        <div class="form-group ">
                            <label for="summary">Summary</label>
                            @include('vendor.laravel-editor.textarea',["name"=>'summary',"content" => "summary"])
                        </div><!-- Summary -->

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="pills-framework-tab" data-toggle="pill" href="#pills-framework" role="tab" aria-controls="pills-framework" aria-selected="true">Framework</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-library-tab" data-toggle="pill" href="#pills-library" role="tab" aria-controls="pills-library" aria-selected="false">Library</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-language-tab" data-toggle="pill" href="#pills-language" role="tab" aria-controls="pills-language" aria-selected="false">Language</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-framework" role="tabpanel" aria-labelledby="pills-framework-tab">
                              <input type="hidden" name="framework_total" value="">

                              <div id="framework-container">
                                      <p>
                                          <input class="form-control" type="text" data-number="1" name="framework-1" value="">
                                      </p>
                              </div>

                              <a id="framework-btn" class="btn btn-primary"><span class="fa fa-plus"></span> Add Field </a>
                          </div>
                          <div class="tab-pane fade" id="pills-library" role="tabpanel" aria-labelledby="pills-library-tab">
                              <input type="hidden" name="library_total" value="">

                              <div id="library-container">
                                      <p>
                                          <input class="form-control" type="text" data-number="1" name="library-1" value="">
                                      </p>
                              </div>

                              <a id="library-btn" class="btn btn-primary"><span class="fa fa-plus"></span> Add Field </a>
                          </div>
                          <div class="tab-pane fade" id="pills-language" role="tabpanel" aria-labelledby="pills-language-tab">
                              <input type="hidden" name="language_total" value="">

                              <div id="language-container">
                                      <p>
                                          <input class="form-control" type="text" data-number="1" name="language-1" value="">
                                      </p>
                              </div>

                              <a id="language-btn" class="btn btn-primary"><span class="fa fa-plus"></span> Add Field </a>
                          </div>
                      </div><!-- Tab Pills -->
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="created">Created</label>
                            <input class="form-control"  data-toggle="datepicker" type="text" name="created" value="">
                            <label for="link">Link</label>
                            <input class="form-control" type="text" name="link" value="">
                            <label for="code">Code</label>
                            <input class="form-control" type="text" name="code" value="">
                            <input class="btn btn-primary my-2" type="submit" name="" value="Save">
                        </div>
                        <div class="form-group">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="medium-tab" data-toggle="tab" href="#medium" role="tab" aria-controls="medium" aria-selected="true">Medium</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="small-tab" data-toggle="tab" href="#small" role="tab" aria-controls="small" aria-selected="false">Small</a>
                              </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active pt-3" id="medium" role="tabpanel" aria-labelledby="medium-tab">
                                  <input type="hidden" name="medium_total" value="">

                                  <div class="image-container">
                                      <div id="medium-container">
                                              <p>
                                                  <input class="form-control" type="text" data-number="1"  name="medium-1" value="">
                                              </p>
                                      </div>

                                  </div>

                                  <a id="medium-btn" class="btn btn-primary"><span class="fa fa-plus"></span> Add Field </a>
                            </div>
                              <div class="tab-pane fade pt-3" id="small" role="tabpanel" aria-labelledby="small-tab">
                                  <input type="hidden" name="small_total" value="">
                                  <div class="image-container">
                                      <div id="small-container">
                                              <p>
                                                  <input class="form-control" type="text" data-number="1" name="small-1" value="">
                                              </p>
                                      </div>
                                  </div>

                                  <a id="small-btn" class="btn btn-primary"><span class="fa fa-plus"></span> Add Field </a>
                              </div>
                            </div><!-- Tabs -->
                        </div>
                    </div>
            </form>
        </div>
    </div>
    @include('vendor.laravel-editor.editor-js')
@endsection

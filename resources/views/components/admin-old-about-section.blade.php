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

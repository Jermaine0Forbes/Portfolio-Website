
<textarea name="{{$name}}" class="vinelab-editor" rows="10">{{$content}}</textarea>
<div id="laravel-editor-uploads-modal" class="modal fade laravel-editor-uploads-modal" role="dialog" aria-hidden="true" aria-labelledby="editorUploads">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Choose Photo</h4>
            </div>

            <div class="modal-body">
                <div id="laravel-editor-uploads-container" style="max-height: 300px; overflow: scroll;"></div>
            </div>

            <div class="modal-footer">
                <button class="btn" id="laravel-editor-upload-more">Upload More</button>
            </div>

        </div>
    </div>
</div>


<script type="text/javascript" src="/vendor/laravel-editor/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="/vendor/laravel-editor/js/markdown.min.js"></script>

<script type="text/javascript">
    $(".vinelab-editor").markdown({
        savable:false,
        autofocus:false,
        iconLibrary: 'fa',
        hiddenButtons: ['cmdCode', 'cmdList', 'cmdListO', 'cmdHeading', 'cmdQuote',  'cmdImage'],
        onPreview: function (e) {

            // transform content into Markdown
            html = markdown.toHTML(e.getContent());
            // encode html entities
            text = html.replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/<script\b[^>]*>(.*?)<\/script>/ig, '');
            // decode everything (including the ones that were encoded by the markdown transformer)
            decoded = $('<div/>').html(text).text();
            // remove script tags and everything between them
            content = decoded.replace(/<script([^'"]|"[^"]*"|'[^']*')*?<\/script>/g, '');

            return content;
        },
        additionalButtons: [
        [
            {
                name: "groupCustom",
                data: [{
                    toggle: false,
                    name: "cmdUploadPhoto",
                    title: "Upload Photo",
                    icon: "fa fa-camera",
                    callback: function(e){
                        // globalize the event to grant access to the editor
                        window.lePhotoUploadEvent = e;
                        // if the editor is in fullscreen we need to close it
                        $('a.exit-fullscreen').first().click();
                        // now we show the modal so that they choose a photo
                        $("#laravel-editor-uploads-modal").modal('show');
                    }
                }]
            },
            {
                name: "groupCustom",
                data: [{
                    toggle: true,
                    name: "cmdFullPreview",
                    title: "Show Preview",
                    icon: "fa fa-search",
                    hotkey: 'Ctrl+P',
                    btnText: 'Preview',
                    btnId: 'foo',
                    btnClass: 'btn btn-primary btn-sm preview',
                    callback: function(e){
                        // e stands for editor
                        if (e.$isPreview) {
                            e.hidePreview();
                        } else {
                            // go fullscreen
                            e.setFullscreen(true);
                            // show preview
                            e.showPreview();
                            // render embeds
                            if (typeof FB == 'object') {
                                FB.XFBML.parse();
                            }

                            if (typeof twttr == 'object') {
                                twttr.widgets.load();
                            }

                            if (typeof instgrm == 'object') {
                                instgrm.Embeds.process();
                            }

                            // check text direction
                            container = e.$editor.find('div[data-provider="markdown-preview"]');

                            if (e.$isRTL) {
                                container.css('direction', 'rtl');
                            }

                            // enable the buttons
                            e.enableButtons(['cmdFullPreview', 'cmdRtl']);
                        }
                    }
                }]
            },
            {
                name: "groupCustom",
                data: [{
                    toggle: true,
                    name: "cmdRtl",
                    title: "Right to Left",
                    icon: "",
                    btnText: 'Ar',
                    btnClass: 'btn btn-info btn-sm',
                    callback: function(e){
                        var container = e.$textarea;
                            preview = e.$editor.find('div[data-provider="markdown-preview"]');
                        if (e.$isRTL) {
                            e.$isRTL = false;
                            container.css({direction: 'ltr'});
                            preview.css({direction: 'ltr'});
                        } else {
                            e.$isRTL = true;
                            container.css({direction: 'rtl'});
                            preview.css({direction: 'rtl'});
                        }
                    }
                }]
            }
        ]
      ]
    });

    window.leUploader = $('#laravel-editor-upload-more').mrUploader({uploadUrl: '/upload'});
    window.leUploader.on('upload', function(event, data) {
        image = $('<img />')
            .attr('src', data.$image.attr('src'))
            .css({
                margin: '0 auto',
                width: '200px',
                padding: '5px',
                cursor: 'pointer'
            }).click(function (event) {
                var chunk, cursor;
                var selected = window.lePhotoUploadEvent.getSelection(), content = window.lePhotoUploadEvent.getContent();

                var url = data.response.url;
                var chunk = '![enter image description here]('+url+' "enter image title here")';
                var cursor = selected.start;

                window.lePhotoUploadEvent.replaceSelection(chunk);
                window.lePhotoUploadEvent.setSelection(cursor+2, 30);

                $("#laravel-editor-uploads-modal").modal('hide');
            });

        $('#laravel-editor-uploads-container').prepend(image);
    });

    // $("#vinelab-editor-textarea").val("");
</script>
